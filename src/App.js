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
    const url = 'https://holistic-finance-stock-data.p.rapidapi.com/api/v1/profile?symbol=VNET,ACGBY,BABA,ANPDY,BIDU,BACHY,BCMXY,BILI,BYDDF,CAN,CMCM,CAAS,CCOZY,CICHY,CGA,CNICF,CJJD,HTHT,CIHKY,CREG,CYD,CLPHY,CCM,DQ,YINN,DUO,FUTU,GNENF,GELYF,CHIX,GWLLF,GURE,HRSHF,HOLI,HUYA,IDCBY,FXI,EWH,EWT,JD,JKS,YY,KNDI,KC,KSFTF,KWEB,LEJU,LNVGY,LI,LNNGF,LITB,PEK,CNY,MPNGY,MOGU,MOMO,CAF,NTES,EDU,NIO,NIU,NOAH,SEED,FENG,PDD,PNGAY,PGJ,FXP,RCON,RENN,BEST,SOHU,SOS,TAL,TAOP,TEDU,TCEHY,TME,NCTY,TCOM,TSGTY,UTSI,TIGR,VIPS,WB,CYB,ASHR,ASHS,CN,XIN,XPEV,XNET,YUMC';
    const options = {
      method: 'GET',
      headers: {
        'X-RapidAPI-Key': process.env.REACT_APP_API_KEY,
        'X-RapidAPI-Host': 'holistic-finance-stock-data.p.rapidapi.com'
      }
    };
  
    fetch(url, options)
      .then(response => response.json())
      .then(result => {
        const newStocks = result.map(stock => ({
          name: toTitleCase(cleanCompanyName(stock.companyName)),
          tickerUrl: 'https://finance.yahoo.com/quote/' + stock.symbol,
          ticker: stock.symbol,
          price: stock.price ? stock.price.toFixed(2) : '-',
          change: stock.changes ? stock.changes.toFixed(2) : '0.00',
          changePercent: stock.changes ? ((stock.changes / stock.price) * 100).toFixed(2) + '%' : '0.00%',
          pe: stock.pe ? stock.pe.toFixed(2) : '-',
          marcap: stock.mktCap ? formatMarketCap(stock.mktCap) : '-',
          yield: stock.lastDiv ? (stock.lastDiv * 1).toFixed(2) + '%' : '-',
          sector: stock.sector || '-',
          industry: stock.industry || '-'
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