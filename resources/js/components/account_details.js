import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default class AccountDetails extends Component {
        constructor(props) {
            super(props);
            console.log(this.props);
            //thuoc tinh auto chuyen thanh lowercase
            console.log(JSON.parse(String(this.props.userbladeside)));
        }

        render() {
            var v = JSON.parse(String(this.props.userbladeside));
            return (
                <div>
                    <div>from REact Client Name:  {v.name}</div>
                    <div>Account Number: {v.account_number ?? 'N/A'} </div>
                    <div>Holdings:</div>
                    <div>{ v.holding }</div>
                    <div><a href="/profiles/shows/{v.id}">View Details</a></div>
                </div>
            );
        }
}

if(document.getElementById('account_details')){
    const element = document.getElementById('account_details');
    const props = element.dataset
    ReactDOM.render(<AccountDetails {...props} />, element);
}


