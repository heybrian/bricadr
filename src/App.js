import React, { useState, useEffect } from "react";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Header from "./Header";
import Body from "./Body";
import Footer from "./Footer";

const App = () => {
  const [chinaStocks, setChinaStocks] = useState([]);
  const [indiaStocks, setIndiaStocks] = useState([]);
  const [russiaStocks, setRussiaStocks] = useState([]);
  const [brazilStocks, setBrazilStocks] = useState([]);

  // Function to convert string to title case
  const toTitleCase = (str) => {
    if (str === str.toUpperCase()) {
      return str.replace(/\w\S*/g, function (txt) {
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
      });
    }
    return str;
  };

  // Function to clean company name
  const cleanCompanyName = (str) => {
    // First, replace "PDD Holdings Inc." with "Pinduoduo"
    let cleanName = str.replace(/PDD Holdings Inc./g, "Pinduoduo");

    // Then remove these patterns at the end
    const suffixes = [
      " Company of China, Ltd.",
      " Group Holding Limited",
      " Corporation Limited",
      " Group Limited",
      " Holdings Limited",
      " Holding Limited",
      " Company Limited",
      " Limited",
      " Holding Co., Ltd.",
      " Co., Ltd.",
      ", Ltd.",
      " Ltd.",
      " Corp.",
      " Group, Inc.",
      " Group Inc.",
      " Group",
      ", Inc.",
      " Inc.",
      " S.A.",
      " - SABESP",
      " plc",
      " N.V."
    ];

    for (let suffix of suffixes) {
      const regex = new RegExp(suffix + "$", "g");
      cleanName = cleanName.replace(regex, "");
    }

    return cleanName.trim();
  };

  // Function to round a number to a specific precision
  const roundToPrecision = (num, precision) => {
    return Math.round(num * Math.pow(10, precision)) / Math.pow(10, precision);
  };

  // Function to format market capitalization
  const formatMarketCap = (value) => {
    if (value >= 1e12) {
      return roundToPrecision(value / 1e12, 1) + "T";
    } else if (value >= 1e9) {
      return roundToPrecision(value / 1e9, 1) + "B";
    } else if (value >= 1e6) {
      return roundToPrecision(value / 1e6, 1) + "M";
    } else if (value >= 1e3) {
      return roundToPrecision(value / 1e3, 1) + "K";
    } else {
      return value.toString();
    }
  };

  useEffect(() => {
    const url =
      "https://holistic-finance-stock-data.p.rapidapi.com/api/v1/profile?symbol=ACGBY,BABA,ANPDY";
    const options = {
      method: "GET",
      headers: {
        "X-RapidAPI-Key": process.env.REACT_APP_API_KEY,
        "X-RapidAPI-Host": "holistic-finance-stock-data.p.rapidapi.com",
      },
    };

    fetch(url, options)
      .then((response) => response.json())
      .then((result) => {
        const newStocks = result.map((stock) => ({
          name: toTitleCase(cleanCompanyName(stock.companyName)),
          website: stock.website,
          tickerUrl: "https://finance.yahoo.com/quote/" + stock.symbol,
          ticker: stock.symbol,
          changePercent: stock.changes
            ? ((stock.changes / stock.price) * 100).toFixed(2) + "%"
            : "0.00%",
          change: stock.changes ? stock.changes.toFixed(2) : "0.00",
          price: stock.price ? stock.price.toFixed(2) : "-",
          pe: stock.pe ? stock.pe.toFixed(2) : "-",
          marcap: stock.mktCap ? formatMarketCap(stock.mktCap) : "-",
          yield: stock.lastDiv ? (stock.lastDiv * 1).toFixed(2) + "%" : "-",
          sector: stock.sector || "Financial Services",
          industry: stock.industry || "Fund",
        }));
        setChinaStocks(newStocks);
      })
      .catch((error) => {
        console.error(error);
      });
  }, []);

  useEffect(() => {
    const url =
      "https://holistic-finance-stock-data.p.rapidapi.com/api/v1/profile?symbol=IBN,MMYT";
    const options = {
      method: "GET",
      headers: {
        "X-RapidAPI-Key": process.env.REACT_APP_API_KEY,
        "X-RapidAPI-Host": "holistic-finance-stock-data.p.rapidapi.com",
      },
    };

    fetch(url, options)
      .then((response) => response.json())
      .then((result) => {
        const newStocks = result.map((stock) => ({
          name: toTitleCase(cleanCompanyName(stock.companyName)),
          website: stock.website,
          tickerUrl: "https://finance.yahoo.com/quote/" + stock.symbol,
          ticker: stock.symbol,
          changePercent: stock.changes
            ? ((stock.changes / stock.price) * 100).toFixed(2) + "%"
            : "0.00%",
          change: stock.changes ? stock.changes.toFixed(2) : "0.00",
          price: stock.price ? stock.price.toFixed(2) : "-",
          pe: stock.pe ? stock.pe.toFixed(2) : "-",
          marcap: stock.mktCap ? formatMarketCap(stock.mktCap) : "-",
          yield: stock.lastDiv ? (stock.lastDiv * 1).toFixed(2) + "%" : "-",
          sector: stock.sector || "Financial Services",
          industry: stock.industry || "Fund",
        }));
        setIndiaStocks(newStocks);
      })
      .catch((error) => {
        console.error(error);
      });
  }, []);

  useEffect(() => {
    const url =
      "https://holistic-finance-stock-data.p.rapidapi.com/api/v1/profile?symbol=ABEV,BBD";
    const options = {
      method: "GET",
      headers: {
        "X-RapidAPI-Key": process.env.REACT_APP_API_KEY,
        "X-RapidAPI-Host": "holistic-finance-stock-data.p.rapidapi.com",
      },
    };

    fetch(url, options)
      .then((response) => response.json())
      .then((result) => {
        const newStocks = result.map((stock) => ({
          name: toTitleCase(cleanCompanyName(stock.companyName)),
          website: stock.website,
          tickerUrl: "https://finance.yahoo.com/quote/" + stock.symbol,
          ticker: stock.symbol,
          changePercent: stock.changes
            ? ((stock.changes / stock.price) * 100).toFixed(2) + "%"
            : "0.00%",
          change: stock.changes ? stock.changes.toFixed(2) : "0.00",
          price: stock.price ? stock.price.toFixed(2) : "-",
          pe: stock.pe ? stock.pe.toFixed(2) : "-",
          marcap: stock.mktCap ? formatMarketCap(stock.mktCap) : "-",
          yield: stock.lastDiv ? (stock.lastDiv * 1).toFixed(2) + "%" : "-",
          sector: stock.sector || "Financial Services",
          industry: stock.industry || "Fund",
        }));
        setBrazilStocks(newStocks);
      })
      .catch((error) => {
        console.error(error);
      });
  }, []);

  useEffect(() => {
    const url =
      "https://holistic-finance-stock-data.p.rapidapi.com/api/v1/profile?symbol=CEE,RUSS";
    const options = {
      method: "GET",
      headers: {
        "X-RapidAPI-Key": process.env.REACT_APP_API_KEY,
        "X-RapidAPI-Host": "holistic-finance-stock-data.p.rapidapi.com",
      },
    };

    fetch(url, options)
      .then((response) => response.json())
      .then((result) => {
        const newStocks = result.map((stock) => ({
          name: toTitleCase(cleanCompanyName(stock.companyName)),
          website: stock.website,
          tickerUrl: "https://finance.yahoo.com/quote/" + stock.symbol,
          ticker: stock.symbol,
          changePercent: stock.changes
            ? ((stock.changes / stock.price) * 100).toFixed(2) + "%"
            : "0.00%",
          change: stock.changes ? stock.changes.toFixed(2) : "0.00",
          price: stock.price ? stock.price.toFixed(2) : "-",
          pe: stock.pe ? stock.pe.toFixed(2) : "-",
          marcap: stock.mktCap ? formatMarketCap(stock.mktCap) : "-",
          yield: stock.lastDiv ? (stock.lastDiv * 1).toFixed(2) + "%" : "-",
          sector: stock.sector || "Financial Services",
          industry: stock.industry || "Fund",
        }));
        setRussiaStocks(newStocks);
      })
      .catch((error) => {
        console.error(error);
      });
  }, []);

  return (
    <Router>
      <div>
        <Header />
        <Routes>
          <Route
            path="/"
            element={<Body stocks={chinaStocks} country="China" />}
          />
          <Route
            path="/india"
            element={<Body stocks={indiaStocks} country="India" />}
          />
          <Route
            path="/russia"
            element={<Body stocks={russiaStocks} country="Russia" />}
          />
          <Route
            path="/brazil"
            element={<Body stocks={brazilStocks} country="Brazil" />}
          />
        </Routes>
        <Footer />
      </div>
    </Router>
  );
};

export default App;
