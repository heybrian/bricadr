import React from 'react';
import './StockTable.css';

class StockTable extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      originalStocks: props.stocks,
      stocks: props.stocks,
      sortColumn: 'name',
      sortAscending: true
    };
  }

  static getDerivedStateFromProps(nextProps, prevState) {
    if (JSON.stringify(nextProps.stocks) !== JSON.stringify(prevState.originalStocks)) {
      return { originalStocks: nextProps.stocks, stocks: nextProps.stocks };
    }
    else return null;
  }

  sort(column) {
    let sortAscending = this.state.sortColumn === column ? !this.state.sortAscending : true;
  
    // The first time a column is clicked, numbers should sort high to low (opposite of strings)
    if (this.state.sortColumn !== column && typeof this.state.stocks[0][column] === 'number') {
      sortAscending = false;
    }
  
    let stocks = [...this.state.stocks]; // create a copy
    stocks.sort((a, b) => {
      if (a[column] < b[column]) return sortAscending ? -1 : 1;
      if (a[column] > b[column]) return sortAscending ? 1 : -1;
      return 0;
    });
    this.setState({stocks, sortColumn: column, sortAscending});
  }  

  render() {
    return (
      <div className='container stock-table'>
        <div className='row bg-primary text-white'>
          <div className='col-2' onClick={() => this.sort('name')}>
            {'ADR Name '}
            {this.state.sortColumn === 'name' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
          </div>
          <div className='col-1' onClick={() => this.sort('ticker')}>
            {'Ticker '}
            {this.state.sortColumn === 'ticker' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
          </div>
          <div className='col-1' onClick={() => this.sort('price')}>
            {'Price '}
            {this.state.sortColumn === 'price' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
          </div>
          <div className='col-1' onClick={() => this.sort('change')}>
            {'Change '}
            {this.state.sortColumn === 'change' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
          </div>
          <div className='col-1' onClick={() => this.sort('changePercent')}>
            {'% '}
            {this.state.sortColumn === 'changePercent' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
          </div>
          <div className='col-1 d-none d-sm-block' onClick={() => this.sort('marcap')}>
            {'MarCap '}
            {this.state.sortColumn === 'marcap' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
          </div>
          <div className='col-1 d-none d-sm-block' onClick={() => this.sort('yield')}>
            {'Yield '}
            {this.state.sortColumn === 'yield' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
          </div>
          <div className='col-2 d-none d-sm-block' onClick={() => this.sort('sector')}>
            {'Sector '}
            {this.state.sortColumn === 'sector' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
          </div>
          <div className='col-2 d-none d-sm-block' onClick={() => this.sort('industry')}>
            {'Industry '}
            {this.state.sortColumn === 'industry' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
          </div>
        </div>
        {this.state.stocks.map(stock => (
          <div className='row border' key={stock.ticker}>
            <div className='col-2'><a href={stock.website} target="_blank" rel="noreferrer">{stock.name}</a></div>
            <div className='col-1'><a href={stock.tickerUrl} target="_blank" rel="noreferrer">{stock.ticker}</a></div>
            <div className='col-1'>{stock.price}</div>
            <div className='col-1' style={{ color: stock.change < 0 ? '#b22222' : 'green' }}>{stock.change}</div>
            <div className='col-1' style={{ color: stock.changePercent.startsWith('-') ? '#b22222' : 'green' }}>{stock.changePercent}</div>
            {/*<div className='col-1 d-none d-sm-block'>{stock.pe}</div>*/}
            <div className='col-1 d-none d-sm-block'>{stock.marcap}</div>
            <div className='col-1 d-none d-sm-block'>{stock.yield}</div>
            <div className='col-2 d-none d-sm-block'>{stock.sector}</div>
            <div className='col-2 d-none d-sm-block'>{stock.industry}</div>
          </div>
        ))}
      </div>
    );
  }
}

export default StockTable;
