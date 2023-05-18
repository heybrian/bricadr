import React from 'react';

const StockTable = ({ stocks }) => (
  <div className='container'>
    <div className='row bg-primary text-white'>
      <div className='col'>ADR Name</div>
      <div className='col'>Ticker</div>
      <div className='col'>Price</div>
      <div className='col'>Change</div>
      <div className='col'>%</div>
      <div className='col'>P/E</div>
      <div className='col'>MarCap</div>
      <div className='col'>Yield</div>
      <div className='col'>Sector</div>
      <div className='col'>Industry</div>
    </div>
    {stocks.map(stock => (
      <div className='row border' key={stock.ticker}>
        <div className='col'><a href={stock.url} target="_blank" rel="noreferrer">{stock.name}</a></div>
        <div className='col'><a href={stock.tickerUrl} target="_blank" rel="noreferrer">{stock.ticker}</a></div>
        <div className='col'>{stock.price}</div>
        <div className='col' style={{ color: stock.change < 0 ? '#b22222' : 'green' }}>{stock.change}</div>
        <div className='col' style={{ color: stock.changePercent.startsWith('-') ? '#b22222' : 'green' }}>{stock.changePercent}</div>
        <div className='col'>{stock.pe}</div>
        <div className='col'>{stock.marcap}</div>
        <div className='col'>{stock.yield}</div>
        <div className='col'>{stock.sector}</div>
        <div className='col'>{stock.industry}</div>
      </div>
    ))}
  </div>
);

export default StockTable;