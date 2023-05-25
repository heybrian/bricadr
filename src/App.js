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

  // Function to round a number to a specific precision
  const roundToPrecision = (num, precision) => {
    return Math.round(num * Math.pow(10, precision)) / Math.pow(10, precision);
  };

  // Function to format market capitalization
  const formatMarketCap = (value) => {
    if (value >= 1e12) {
      return roundToPrecision(value / 1e12, 1) + 'T';
    } else if (value >= 1e9) {
      return roundToPrecision(value / 1e9, 1) + 'B';
    } else if (value >= 1e6) {
      return roundToPrecision(value / 1e6, 1) + 'M';
    } else {
      return value.toString();
    }
  };

  useEffect(() => {
    const url = 'https://apidojo-yahoo-finance-v1.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=VNET%2CACGBY%2CBABA%2CANPDY%2CBIDU%2CBACHY%2CBCMXY%2CBILI%2CBYDDF%2CCAN%2CCMCM%2CCAAS%2CCCOZY%2CCICHY%2CCGA%2CCNICF%2CCJJD%2CHTHT%2CCIHKY%2CCREG%2CCYD%2CCLPHY%2CCCM%2CDQ%2CYINN%2CDUO%2CFUTU%2CGNENF%2CGELYF%2CCHIX%2CGWLLF%2CGURE%2CHRSHF%2CHOLI%2CHUYA%2CIDCBY%2CFXI%2CEWH%2CEWT%2CJD%2CJKS%2CYY%2CKNDI%2CKC%2CKSFTF%2CKWEB%2CLEJU%2CLNVGY%2CLI%2CLNNGF%2CLITB%2CPEK%2CCNY%2CMPNGY%2CMOGU%2CMOMO%2CCAF%2CNTES%2CEDU%2CNIO%2CNIU%2CNOAH%2CSEED%2CFENG%2C%2CPDD%2CPNGAY%2CPGJ%2CFXP%2CRCON%2CRENN%2CBEST%2CSOHU%2CSOS%2C%2CTAL%2CTAOP%2CTEDU%2CTCEHY%2CTME%2CNCTY%2CTCOM%2CTSGTY%2CUTSI%2CTIGR%2CVIPS%2CWB%2CCYB%2CASHR%2CASHS%2CCN%2CXIN%2CXPEV%2CXNET%2CYUMC'; 
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
            marcap: stock.marketCap ? formatMarketCap(stock.marketCap) : '\u00A0\u00A0\u00A0-',
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
        const url = 'https://apidojo-yahoo-finance-v1.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=RDY'; 
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
                marcap: stock.marketCap ? formatMarketCap(stock.marketCap) : '\u00A0\u00A0\u00A0-',
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
    const url = 'https://apidojo-yahoo-finance-v1.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=ABEV'; 
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
            marcap: stock.marketCap ? formatMarketCap(stock.marketCap) : '\u00A0\u00A0\u00A0-',
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
    const url = 'https://apidojo-yahoo-finance-v1.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=CEE'; 
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
            marcap: stock.marketCap ? formatMarketCap(stock.marketCap) : '\u00A0\u00A0\u00A0-',
            yield: stock.trailingAnnualDividendYield ? (stock.trailingAnnualDividendYield * 100).toFixed(2) + '%' : '\u00A0\u00A0\u00A0-',
            sector: stock.sector || '\u00A0\u00A0\u00A0-',
            industry: stock.industry || '\u00A0\u00A0\u00A0-'
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