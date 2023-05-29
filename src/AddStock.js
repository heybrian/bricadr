import React from 'react';
import { Button, Form, Modal } from 'react-bootstrap';
import emailjs from 'emailjs-com';

const AddStock = ({ close }) => {
  const sendEmail = (e) => {
    e.preventDefault();

    emailjs.sendForm('YOUR_SERVICE_ID', 'YOUR_TEMPLATE_ID', e.target, 'YOUR_USER_ID')
      .then((result) => {
          console.log(result.text);
      }, (error) => {
          console.log(error.text);
      });
      e.target.reset();
      close();
  }

  return (
    <Modal show={true} onHide={close}>
      <Modal.Header closeButton>
        <Modal.Title>Add a New ADR</Modal.Title>
      </Modal.Header>
      <Modal.Body>
        <Form onSubmit={sendEmail}>
          <Form.Group controlId="formBasicEmail">
            <Form.Label>ADR Stock Ticker</Form.Label>
            <Form.Control type="text" placeholder="Enter Stock Ticker" name="ticker" required />
          </Form.Group>
          <br></br>
          <Form.Group controlId="formBasicText">
            <Form.Label>Comments</Form.Label>
            <Form.Control as="textarea" rows={3} placeholder="Enter Comments" name="comments" />
          </Form.Group>
          <br></br>
          <Form.Group controlId="formBasicEmail">
            <Form.Label>Email address (Optional)</Form.Label>
            <Form.Control type="email" placeholder="Enter email" name="email" />
          </Form.Group>
            <br></br>
          <Button variant="primary" type="submit">
            Submit
          </Button>
        </Form>
      </Modal.Body>
    </Modal>
  );
};

export default AddStock;
