import React from 'react';
import StockTable from './StockTable'; // adjust the path according to your project structure
import './Body.css';

const Body = ({ stocks, country }) => (
  <div>
    <h1><strong>{country}:</strong> Sortable list of all stocks and funds</h1>
    <h4>A list of all {country} companies traded on U.S. exchanges, sortable by price, P/E, name and industry.<br />
      Found a new ADR? <a href="mailto:heybej@gmail.com">Add it here</a>.
    </h4>

    <div className="column span-3">
      <p>&nbsp;</p>
      {/*<p className='ad'>Ad</p>*/}
    </div>
    <StockTable stocks={stocks} />
    <div className="column span-3 last">
      {/*<p className='ad'>Ad</p>*/}
    </div>

  </div>
);

export default Body;
