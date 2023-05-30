import React from "react";
import { Modal, Button } from "react-bootstrap";

class InfoOverlay extends React.Component {
  constructor(props, context) {
    super(props, context);

    this.handleShow = this.handleShow.bind(this);
    this.handleClose = this.handleClose.bind(this);

    this.state = {
      show: false,
    };
  }

  handleClose() {
    this.setState({ show: false });
  }

  handleShow() {
    this.setState({ show: true });
  }

  render() {
    return (
      <>
        <a href="#" onClick={this.handleShow}>
          {this.props.linkText}
        </a>

        <Modal show={this.state.show} onHide={this.handleClose}>
          <Modal.Header closeButton>
            <Modal.Title>What’s a BRIC?</Modal.Title>
          </Modal.Header>
          <Modal.Body>
            <p>
              BRIC (typically rendered as “the BRICs” or “the BRIC countries” or
              known as the “Big Four”) is a grouping acronym that refers to the
              countries of Brazil, Russia, India, and China that are deemed to
              all be at a similar stage of newly advanced economic development.
              The four countries, combined, currently account for more than a
              quarter of the world's land area and more than 40% of the world's
              population. Some economists believe the economic potential of
              Brazil, Russia, India, and China is such that they could become
              among the four most dominant economies by the year 2050.
            </p>
            <p>
              The acronym was coined by Jim O’Neill of Goldman Sachs in a 2001
              paper entitled “The World Needs Better Economic BRICs”.
            </p>
          </Modal.Body>
          <Modal.Header>
            <Modal.Title>What’s an ADR?</Modal.Title>
          </Modal.Header>
          <Modal.Body>
            <p>
              ADR is an acronym that stands for American Depositary Receipt. An
              ADR represents ownership in the shares of a non-U.S. company that
              trades in U.S. financial markets. ADRs enable investors to buy
              foreign companies on United State exchanges (NYSE, NASDAQ) and in
              US dollars while paying the same fees as other US listed
              securities. Additionally, companies that list ADRs are subject to
              the same compliance and laws as other US companies. ADRs do
              contain risk and can be extremely volatile.
            </p>
          </Modal.Body>
        </Modal>
      </>
    );
  }
}

export default InfoOverlay;
