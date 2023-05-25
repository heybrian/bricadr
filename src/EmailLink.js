import React, { useState } from 'react';

const EmailLink = () => {
    const [email, setEmail] = useState(null);

    const showEmail = () => {
        setEmail('heybej@gmail.com');
    };

    return (
        <a href={`mailto:${email}`} onClick={showEmail}>
            {email || 'Contact'}
        </a>
    );
};

export default EmailLink;
