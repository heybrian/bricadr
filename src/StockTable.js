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
    if (this.state.sortColumn !== column && (typeof this.state.stocks[0][column] === 'number' || column === 'price' || column === 'marcap')) {
      sortAscending = false;
    }
  
    let stocks = [...this.state.stocks]; // create a copy
    stocks.sort((a, b) => {
      let aValue = a[column];
      let bValue = b[column];
      
      if (column === 'price' || column === 'marcap') {
        aValue = a[column] === '-' ? '0' : a[column];
        bValue = b[column] === '-' ? '0' : b[column];
  
        let suffixes = {'K': 1e3, 'M': 1e6, 'B': 1e9, 'T': 1e12};
        let suffixA = aValue.charAt(aValue.length-1);
        let suffixB = bValue.charAt(bValue.length-1);
  
        if(suffixes[suffixA]) {
          aValue = parseFloat(aValue.slice(0, -1)) * suffixes[suffixA];
        } else {
          aValue = parseFloat(aValue);
        }
  
        if(suffixes[suffixB]) {
          bValue = parseFloat(bValue.slice(0, -1)) * suffixes[suffixB];
        } else {
          bValue = parseFloat(bValue);
        }
      } else if (column === 'name') {
        aValue = aValue.toLowerCase();
        bValue = bValue.toLowerCase();
      }
      
      if (aValue < bValue) return sortAscending ? -1 : 1;
      if (aValue > bValue) return sortAscending ? 1 : -1;
      return 0;
    });
    this.setState({stocks, sortColumn: column, sortAscending});
  }  

  render() {
    return (
      <div className='container stock-table'>
        <div className='row bg-primary text-white'>
          <div className='col-3 col-sm-2 text-nowrap' onClick={() => this.sort('name')}>
            {'ADR Name '}
            {this.state.sortColumn === 'name' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
          </div>
          <div className='col-3 col-sm-1 text-nowrap' onClick={() => this.sort('ticker')}>
            {'Ticker '}
            {this.state.sortColumn === 'ticker' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
          </div>
          <div className='col-2 col-sm-1 text-nowrap' onClick={() => this.sort('price')}>
            {'Price '}
            {this.state.sortColumn === 'price' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
          </div>
          <div className='col-2 col-sm-1 text-nowrap' onClick={() => this.sort('change')}>
            {'Change '}
            {this.state.sortColumn === 'change' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
          </div>
          <div className='col-2 col-sm-1 text-nowrap' onClick={() => this.sort('changePercent')}>
      {'\u00A0\u00A0\u00A0\u00A0\u00A0% '}
      {this.state.sortColumn === 'changePercent' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
    </div>
    <div className='d-none d-sm-block col-sm-1 text-nowrap' onClick={() => this.sort('marcap')}>
      {'MarCap '}
      {this.state.sortColumn === 'marcap' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
    </div>
    <div className='d-none d-sm-block col-sm-1 text-nowrap' onClick={() => this.sort('yield')}>
      {'Yield '}
      {this.state.sortColumn === 'yield' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
    </div>
    <div className='d-none d-sm-block col-sm-2' onClick={() => this.sort('sector')}>
      {'Sector '}
      {this.state.sortColumn === 'sector' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
    </div>
    <div className='d-none d-sm-block col-sm-2' onClick={() => this.sort('industry')}>
      {'Industry '}
      {this.state.sortColumn === 'industry' ? (this.state.sortAscending ? '\u2191' : '\u2193') : ''}
    </div>
        </div>
        {this.state.stocks.map(stock => (
          <div className='row border' key={stock.ticker}>
            <div className='col-3 col-sm-2'><a href={stock.website} target="_blank" rel="noreferrer">{stock.name}</a></div>
            <div className='col-3 col-sm-1'><a href={stock.tickerUrl} target="_blank" rel="noreferrer">{stock.ticker}</a></div>
            <div className='col-2 col-sm-1'>{stock.price}</div>
            <div className='col-2 col-sm-1' style={{ color: stock.change < 0 ? '#b22222' : 'green' }}>{stock.change}</div>
            <div className='col-2 col-sm-1' style={{ color: stock.changePercent.startsWith('-') ? '#b22222' : 'green' }}>{stock.changePercent}</div>
      <div className='d-none d-sm-block col-sm-1'>{stock.marcap}</div>
      <div className='d-none d-sm-block col-sm-1'>{stock.yield}</div>
      <div className='d-none d-sm-block col-sm-2'>{stock.sector}</div>
      <div className='d-none d-sm-block col-sm-2'>{stock.industry}</div>
          </div>
        ))}
      </div>
    );
  }
}

export default StockTable;
