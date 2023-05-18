import React from 'react';
import StockTable from './StockTable'; // adjust the path according to your project structure

const Body = ({ stocks }) => (
  <div>
    <h1><strong>China:</strong> Sortable list of all stocks and funds</h1>
    <h4>A list of all Chinese companies traded on U.S. exchanges, sortable by price, P/E, name and industry.<br />
      Found a new ADR? <a href="mailto:heybej@gmail.com">Add it here</a>.
    </h4>
    <hr />
    <div className="column span-3">
      <p>Ad</p>
    </div>
    <StockTable stocks={stocks} />
    <div className="column span-3 last">
      <p>Ad</p>
    </div>
    <hr />
  </div>
);

export default Body;