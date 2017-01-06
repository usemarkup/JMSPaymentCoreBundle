JMSPaymentCoreBundle [![Build Status](https://secure.travis-ci.org/usemarkup/JMSPaymentCoreBundle.png?branch=master)](http://travis-ci.org/usemarkup/JMSPaymentCoreBundle)
====================

This bundle provides the foundation for using different payment backends in Symfony projects. It abstracts away the differences between payment protocols and offers a simple and unified API for performing financial transactions.

Features:

- Simple, unified API (integrate once and use any payment provider)
- Persistence of financial entities (such as payments, transactions, etc.)
- Transaction management including retry logic
- Encryption of sensitive data
- Supports [many](http://jmspaymentcorebundle.readthedocs.io/en/stable/backends.html) payment backends out of the box
- Easily support other payment backends

# Documentation

[View Documentation](http://jmspaymentcorebundle.readthedocs.io)

# License

* Code: [Apache2](https://github.com/schmittjoh/JMSPaymentCoreBundle/blob/master/LICENSE)
* Docs: [CC BY-NC-ND 3.0](https://github.com/schmittjoh/JMSPaymentCoreBundle/blob/master/Resources/doc/LICENSE)
