import React from 'react';
import './Header.css';

const Header = () => (
  <header> 
    <p>
      <a href="/">China</a> |&nbsp;
      <a href="../india_adr.php">India</a> |&nbsp;
      <a href="../brazil_adr.php">Brazil</a> |&nbsp;
      <a href="../russia_adr.php">Russia</a> |&nbsp;
      <a href="#">More countries...</a> 
      <span style={{float: 'right'}}>
        <a className="bricBox" href="#bric_box">What&rsquo;s a BRIC?</a> |&nbsp;
        <a className="bricBox" href="#bric_box">What&rsquo;s an ADR?</a> |&nbsp;
        <a href="mailto:heybej@gmail.com">Contact</a>
      </span>
    </p>
    {/* Additional elements can be added here */}
    <h2>bricadr.com</h2>
  </header>
);

export default Header;