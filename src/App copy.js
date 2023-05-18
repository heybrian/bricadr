import React from 'react';
import Header from './Header'; // adjust the path according to your project structure
import Body from './Body'; // adjust the path according to your project structure
import Footer from './Footer'; // adjust the path according to your project structure

const App = () => {
  const stocks = [
    {
      name: 'Baidu',
      url: 'https://www.baidu.com/',
      ticker: 'BIDU',
      tickerUrl: 'http://finance.yahoo.com/q?d=t&amp;s=BIDU',
      price: 118.80,
      change: -0.58,
      changePercent: '-0.49%',
      pe: 41.43,
      marcap: '41.859B',
      yield: 'N/A',
      sector: 'Technology',
      industry: 'Internet'
    },
    {
      name: 'JD.com, Inc.',
      url: 'https://www.jd.com/',
      ticker: 'JD',
      tickerUrl: 'http://finance.yahoo.com/q?d=t&amp;s=JD',
      price: 35.10,
      change: -0.52,
      changePercent: '-1.46%',
      pe: 37.74,
      marcap: '55.244B',
      yield: '1.73%',
      sector: 'Consumer',
      industry: 'e-Commerce'
    },
    // other stocks...
  ];

  return (
    <div>
      <Header />
      <Body stocks={stocks} />
      <Footer />
    </div>
  );
};

export default App;
