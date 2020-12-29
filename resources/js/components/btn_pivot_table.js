import React, { Component } from "react";
import ReactDOM from "react-dom";
import axios from 'axios';


export default class BtnPivotTable extends Component {
        constructor(props){
            super(props);
            console.log(this.props);
            this.state = {
                name: 'Add',
                description: '',
                isRemoveYes: this.props.isRemoveYes
            }

            this.onClick = this.onClick.bind(this);
        }

        onClick(e) {
            this.setState({ isRemoveYes: !this.state.isRemoveYes })
            console.log("Clicked")


            axios.post('/save/' + this.props.holding_id +'/'+ this.props.user_id)
            .then(response => {
                console.log(response.data)
            })


        }

        componentDidMount () {}

        render() {
        const style = { width: '90px' }
            return( <button style= {style} onClick={this.onClick}>{ this.state.isRemoveYes ? 'Remove' : 'Add' }</button> )
        }

};





