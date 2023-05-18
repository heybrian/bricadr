import React from 'react';

const Header = () => (
  <header> 
    <p>
      <a href="/">China</a> | 
      <a href="../india_adr.php">India</a> | 
      <a href="../brazil_adr.php">Brazil</a> | 
      <a href="../russia_adr.php">Russia</a> | 
      <a href="#">More countries...</a> 
      <span style={{float: 'right'}}>
        <a className="bricBox" href="#bric_box">What&rsquo;s a BRIC?</a> | 
        <a className="bricBox" href="#bric_box">What&rsquo;s an ADR?</a> | 
      </span>
    </p>
    {/* Additional elements can be added here */}
    <h2>bricadr.com</h2>
  </header>
);

export default Header;