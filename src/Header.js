import React from 'react';
import './Header.css';
import { Link } from 'react-router-dom';
import EmailLink from './EmailLink';
import InfoOverlay from './InfoOverlay';
import { useMediaQuery } from 'react-responsive';
import { ReactComponent as ChinaFlag } from './assets/ChinaFlag.svg';
import { ReactComponent as BrazilFlag } from './assets/BrazilFlag.svg';
import { ReactComponent as IndiaFlag } from './assets/IndiaFlag.svg';
import { ReactComponent as RussiaFlag } from './assets/RussiaFlag.svg';

const Header = () => {
  const isPortrait = useMediaQuery({ query: '(max-width: 575px)' });
  const isLandscape = useMediaQuery({ query: '(min-aspect-ratio: 13/9)' });

  return (
    <header> 
      <p>
        <span className="info">
            <InfoOverlay linkText="What&rsquo;s a BRIC?" /> |&nbsp;
            <InfoOverlay linkText="What&rsquo;s an ADR?" /> |&nbsp;
            <EmailLink />
        </span>
        {isPortrait && !isLandscape ? (
          <>
            <Link to="/"><ChinaFlag className="flag-icon" /></Link> |&nbsp;
            <Link to="/india"><IndiaFlag className="flag-icon" /></Link> |&nbsp;
            <Link to="/brazil"><BrazilFlag className="flag-icon" /></Link> |&nbsp;
            <Link to="/russia"><RussiaFlag className="flag-icon" /></Link>
          </>
        ) : (
          <>
            <Link to="/">China</Link> |&nbsp;
            <Link to="/india">India</Link> |&nbsp;
            <Link to="/brazil">Brazil</Link> |&nbsp;
            <Link to="/russia">Russia</Link>
          </>
        )}
      </p>
      <h2>bricadr.com</h2>
    </header>
  );
}

export default Header;
