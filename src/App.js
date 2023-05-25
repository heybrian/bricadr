import React, { useState, useEffect } from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import Header from './Header';
import Body from './Body';
import Footer from './Footer';

const App = () => {
  const [chinaStocks, setChinaStocks] = useState([]);
  const [indiaStocks, setIndiaStocks] = useState([]);
  const [russiaStocks, setRussiaStocks] = useState([]);
  const [brazilStocks, setBrazilStocks] = useState([]);

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
    const url = 'https://apidojo-yahoo-finance-v1.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=VNET%2CACGBY%2CBABA%2CANPDY%2CBIDU%2CCAN%2CJD%2CJKS'; 
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
            pe: stock.trailingPE ? stock.trailingPE.toFixed(2) : '\u00A0\u00A0\u00A0-',
            marcap: formatMarketCap(stock.marketCap),
            yield: stock.trailingAnnualDividendYield ? (stock.trailingAnnualDividendYield * 100).toFixed(2) + '%' : '\u00A0\u00A0\u00A0-',
            sector: stock.sector || '\u00A0\u00A0\u00A0-',
            industry: stock.industry || '\u00A0\u00A0\u00A0-'
          }));
        setChinaStocks(newStocks);
      })
      .catch(error => {
        console.error(error);
      });
    }, []);


    useEffect(() => {
        const url = 'https://apidojo-yahoo-finance-v1.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=RDY%2CHDB'; 
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
                yield: stock.trailingAnnualDividendYield ? (stock.trailingAnnualDividendYield * 100).toFixed(2) + '%' : '\u00A0\u00A0\u00A0-',
                sector: stock.sector || '\u00A0\u00A0\u00A0-',
                industry: stock.industry || '\u00A0\u00A0\u00A0-'
                  }));
            setIndiaStocks(newStocks);
          })
          .catch(error => {
            console.error(error);
          });
        }, []);

  useEffect(() => {
    const url = 'https://apidojo-yahoo-finance-v1.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=ABEV%2CBBD'; 
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
            yield: stock.trailingAnnualDividendYield ? (stock.trailingAnnualDividendYield * 100).toFixed(2) + '%' : '\u00A0\u00A0\u00A0-',
            sector: stock.sector || '\u00A0\u00A0\u00A0-',
            industry: stock.industry || '\u00A0\u00A0\u00A0-'
          }));
        setBrazilStocks(newStocks);
      })
      .catch(error => {
        console.error(error);
      });
    }, []);

  useEffect(() => {
    const url = 'https://apidojo-yahoo-finance-v1.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=NFLX'; 
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
            yield: stock.trailingAnnualDividendYield ? (stock.trailingAnnualDividendYield * 100).toFixed(2) + '%' : '\u00A0\u00A0\u00A0-',
            sector: stock.sector || '\u00A0\u00A0\u00A0-',
            industry: stock.industry || 'N/A'
          }));
        setRussiaStocks(newStocks);
      })
      .catch(error => {
        console.error(error);
      });
    }, []);

    return (
        <Router>
          <div>
            <Header />
            <Routes>
            <Route path="/" element={<Body stocks={chinaStocks} country="China" />} />
              <Route path="/india" element={<Body stocks={indiaStocks} country="India" />} />
              <Route path="/russia" element={<Body stocks={russiaStocks} country="Russia" />} />
              <Route path="/brazil" element={<Body stocks={brazilStocks} country="Brazil" />} />
            </Routes>
            <Footer />
          </div>
        </Router>
      );
    };
    
export default App;