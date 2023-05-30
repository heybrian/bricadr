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
              The acronym BRIC, often rendered as "the BRICs" or "the BRIC
              countries" or referred to as the "Big Four," represents a group of
              countries consisting of Brazil, Russia, India, and China. These
              nations are considered to be at a comparable stage of newly
              advanced economic development. Collectively, they account for more
              than a quarter of the world’s land area and over 40% of its
              population. Some economists project that due to their significant
              economic potential, these four countries may become among the most
              dominant economies by the year 2050.
            </p>
            <p>
              This acronym was first coined by Jim O’Neill from Goldman Sachs in
              his 2001 paper titled "The World Needs Better Economic BRICs.”
            </p>
          </Modal.Body>
          <Modal.Header>
            <Modal.Title>What’s an ADR?</Modal.Title>
          </Modal.Header>
          <Modal.Body>
            <p>
              ADR, or American Depositary Receipt, is a financial instrument
              that represents ownership in shares of a non-U.S. company and
              trades on U.S. financial markets. ADRs enable investors to buy
              shares of foreign companies on U.S. exchanges, such as the NYSE or
              NASDAQ, and in U.S. dollars. These transactions incur the same
              fees as trading in U.S.-listed securities. Additionally, companies
              listing ADRs are subject to the same regulations and laws as
              domestic U.S. companies. However, it’s important to note that ADRs
              can be risky and may exhibit high volatility.
            </p>
          </Modal.Body>
        </Modal>
      </>
    );
  }
}

export default InfoOverlay;
