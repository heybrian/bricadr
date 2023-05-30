import React from 'react';
import './Header.css';
import { Link } from 'react-router-dom';
import EmailLink from './EmailLink';
import InfoOverlay from './InfoOverlay';

const Header = () => (
  <header> 
    <p>
      <Link to="/">China</Link> |&nbsp;
      <Link to="/india">India</Link> |&nbsp;
      <Link to="/brazil">Brazil</Link> |&nbsp;
      <Link to="/russia">Russia</Link>{/* |&nbsp;
      <Link to="#">More countries...</Link>*/}
      <span style={{float: 'right'}}>
        <InfoOverlay linkText="What&rsquo;s a BRIC?" /> |&nbsp;
        <InfoOverlay linkText="What&rsquo;s an ADR?" /> |&nbsp;
        <EmailLink />
      </span>
    </p>
    {/* Additional elements can be added here */}
    <h2>bricadr.com</h2>
  </header>
);

export default Header;
