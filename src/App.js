import React, { useState, useEffect } from 'react';
import Header from './Header';
import Body from './Body';
import Footer from './Footer';

const App = () => {
  const [stocks, setStocks] = useState([]);

  // Function to convert string to title case
  const toTitleCase = (str) => {
    if (str === str.toUpperCase()) {
      return str.replace(/\w\S*/g, function(txt) {
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
      });
    }
    return str;
  };

  // Function to clean company name
  const cleanCompanyName = (str) => {
    let cleanName = str.replace(/,\sInc.$|Holding\sLimited$|Holding\sCompany\sLimi$|\sUnsp$/g, '');
    return cleanName;
  };

  // Function to format market capitalization
  const formatMarketCap = (value) => {
    if (value >= 1e12) {
      return (value / 1e12).toFixed(3) + 'T';
    } else if (value >= 1e9) {
      return (value / 1e9).toFixed(3) + 'B';
    } else if (value >= 1e6) {
      return (value / 1e6).toFixed(3) + 'M';
    } else {
      return value.toString();
    }
  };

  useEffect(() => {
    const url = 'https://apidojo-yahoo-finance-v1.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=ACGBY%2CBABA%2CANPDY%2CBIDU%2CJD%2CJKS';
    const options = {
      method: 'GET',
      headers: {
        'X-RapidAPI-Key': process.env.REACT_APP_API_KEY,
        'X-RapidAPI-Host': 'apidojo-yahoo-finance-v1.p.rapidapi.com'
      }
    };
  
    fetch(url, options)
      .then(response => response.json())
      .then(result => {
        const newStocks = result.quoteResponse.result.map(stock => ({
          name: toTitleCase(cleanCompanyName(stock.shortName)),
          tickerUrl: 'https://finance.yahoo.com/quote/' + stock.symbol,
          ticker: stock.symbol,
          price: stock.regularMarketPrice.toFixed(2),
          change: stock.regularMarketChange.toFixed(2),
          changePercent: stock.regularMarketChangePercent.toFixed(2) + '%',
          pe: stock.trailingPE.toFixed(2),
          marcap: formatMarketCap(stock.marketCap),
          yield: stock.trailingAnnualDividendYield ? (stock.trailingAnnualDividendYield * 100).toFixed(2) + '%' : 'N/A',
          sector: stock.sector,
          industry: stock.industry
        }));
        setStocks(newStocks);
      })
      .catch(error => {
        console.error(error);
      });
  }, []);

  return (
    <div>
      <Header />
      <Body stocks={stocks} />
      <Footer />
    </div>
  );
};

export default App;
