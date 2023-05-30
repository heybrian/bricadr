import React, { useState } from "react";
import StockTable from "./StockTable"; // adjust the path according to your project structure
import "./Body.css";
import AddStock from "./AddStock";

const Body = ({ stocks, country }) => {
  const [showAddStock, setShowAddStock] = useState(false);
  const numberOfStocks = stocks.length;

  return (
    <div>
      <h1>
        <strong>{country}:</strong> Sortable list of all stocks and funds
      </h1>
      <h4>
        A list of {numberOfStocks} {country} ADRs and funds traded on U.S.
        exchanges, sortable by name, price, change, and industry.
        <br />
        Found a new ADR?{" "}
        <span
          onClick={() => setShowAddStock(true)}
          style={{ color: "blue", cursor: "pointer" }}
        >
          Add it here
        </span>
        .
      </h4>
      {showAddStock && <AddStock close={() => setShowAddStock(false)} />}
      <div className="column span-3">
        <p>&nbsp;</p>
        {/*<p className='ad'>Ad</p>*/}
      </div>
      <StockTable stocks={stocks} />
      <div className="column span-3 last">{/*<p className='ad'>Ad</p>*/}</div>
    </div>
  );
};

export default Body;
