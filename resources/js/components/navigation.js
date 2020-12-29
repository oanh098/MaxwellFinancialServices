import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default function Navigation(props) {
        return (
            <ul>
              <li><a href="index">Home</a></li>
              <li><a href="about">About Us</a></li>
              <li class="submenu"><a>Services</a>
                  <ul>
                    <li><a href="business-growth">Superannuation SMSF</a></li>
                    <li><a href="research-and-strategy">International Investing</a></li>
                    <li><a href="liabilities-management">Fixed Term Deposits Annuties</a></li>
                    <li><a href="clearing-and-execution">Refinancing Advice</a></li>
                    <li><a href="product-solutions">Wills & Power of Attorneys Estate Planning</a></li>
                    <li><a href="transition-services">Transition Services</a></li>
                    <li><a href="why-choose-us">Why Choose Us</a></li>
                  </ul>
              </li>
              <li><a href="resort">Resource</a></li>
              <li><a href="contactus">Contact</a></li>
            </ul>
        );

}

if (document.getElementById('navigation')) {
    ReactDOM.render(<Navigation />, document.getElementById('navigation'));
}

