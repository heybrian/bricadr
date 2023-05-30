import React from "react";
import "./Footer.css";

const Footer = () => (
  <footer>
    <p>
      Financial Market Data powered by{" "}
      <a href="http://finance.yahoo.com/" target="_blank">
        Yahoo! Inc.
      </a>{" "}
      All rights reserved.
    </p>
    <p>
      NYSE/AMEX/NASDAQ/OTC/other data delayed by two hours or more. Click ticker
      symbols for more current quote prices.{" "}
      <span>
        <a href="#">Back to top &#94;</a>
      </span>
    </p>

    <h6>
      The information provided here, contributed by various sources not
      affiliated with bricadr.com, is not guaranteed by us for completeness,
      accuracy, or timeliness. It is not intended to be a comprehensive or
      error-free summary of the available data. Accordingly, we do not warrant,
      endorse, or guarantee its integrity or completeness. You must
      independently evaluate and bear all risks associated with using this
      information, including any reliance on its accuracy, completeness, or
      usefulness.
    </h6>
    <h6>
      This information is not intended to serve as the primary basis for
      investment decisions, nor should it be interpreted as financial or other
      advice, or an offer to sell or solicitation of an offer to buy any
      security in any jurisdiction where such an offer or solicitation would be
      illegal.
    </h6>
    <h6>
      Any opinions or assertions contained herein do not represent the views or
      beliefs of bricadr.com or any of its employees, who may hold positions in
      any of the securities discussed. Information expressed on this date is
      subject to change without notice.
    </h6>
  </footer>
);

export default Footer;
