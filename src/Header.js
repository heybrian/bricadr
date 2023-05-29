import React from 'react';
import './Header.css';
import { Link } from 'react-router-dom';
import EmailLink from './EmailLink';

const Header = () => (
  <header> 
    <p>
      <Link to="/">China</Link> |&nbsp;
      <Link to="/india">India</Link> |&nbsp;
      <Link to="/brazil">Brazil</Link> |&nbsp;
      <Link to="/russia">Russia</Link>{/* |&nbsp;
      <Link to="#">More countries...</Link>*/}
      <span style={{float: 'right'}}>
        <Link className="bricBox" to="#bric_box">What&rsquo;s a BRIC?</Link> |&nbsp;
        <Link className="bricBox" to="#bric_box">What&rsquo;s an ADR?</Link> |&nbsp;
        <EmailLink />
      </span>
    </p>
    {/* Additional elements can be added here */}
    <h2>bricadr.com</h2>
  </header>
);

export default Header;
