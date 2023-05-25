import React from 'react';
import './StockTable.css';

const StockTable = ({ stocks }) => (
  <div className='container'>
    <div className='row bg-primary text-white'>
      <div className='col-3'>ADR Name</div>
      <div className='col-1'>Ticker</div>
      <div className='col-1'>Price</div>
      <div className='col-1'>Change</div>
      <div className='col-1'>%</div>
      <div className='col-1 d-none d-sm-block'>P/E</div>
      <div className='col-1 d-none d-sm-block'>MarCap</div>
      <div className='col-1 d-none d-sm-block'>Yield</div>
      <div className='col-1 d-none d-sm-block'>Sector</div>
      <div className='col-1 d-none d-sm-block'>Industry</div>
    </div>
    {stocks.map(stock => (
      <div className='row border' key={stock.ticker}>
        <div className='col-3'><a href={stock.url} target="_blank" rel="noreferrer">{stock.name}</a></div>
        <div className='col-1'><a href={stock.tickerUrl} target="_blank" rel="noreferrer">{stock.ticker}</a></div>
        <div className='col-1'>{stock.price}</div>
        <div className='col-1' style={{ color: stock.change < 0 ? '#b22222' : 'green' }}>{stock.change}</div>
        <div className='col-1' style={{ color: stock.changePercent.startsWith('-') ? '#b22222' : 'green' }}>{stock.changePercent}</div>
        <div className='col-1 d-none d-sm-block'>{stock.pe}</div>
        <div className='col-1 d-none d-sm-block'>{stock.marcap}</div>
        <div className='col-1 d-none d-sm-block'>{stock.yield}</div>
        <div className='col-1 d-none d-sm-block'>{stock.sector}</div>
        <div className='col-1 d-none d-sm-block'>{stock.industry}</div>
      </div>
    ))}
  </div>
);

export default StockTable;
