import React, { Component } from "react";
import ReactDOM from "react-dom";
import BtnPivotTable from "./btn_pivot_table";
import BtnPivotTableFuncComp from "./btn_pivot_table_func_comp";

export default class BtnStorePivotTable extends Component {
    constructor(props) {
        super(props);
        console.log(this.props);
        console.log(this.props[0]);
        console.log(this.props[1]);
        console.log(this.props[2]);
        console.log(this.props[3]);
        const JsonData = this.props[2].value;
        console.log(JSON.parse(JsonData));
    }



    render() {
        var dataRemoveYesTrue = JSON.parse(this.props[2].value);//isRemoveYes:true
        var dataRemoveYesFalse = JSON.parse(this.props[3].value);//isRemoveYes:false
        var user_id = this.props[1].value;



        const vRemoveTrue =  dataRemoveYesTrue.map(function(data, index){ return (
        <div key={index} className="row justify-content-center">
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.id}</div>
            <div className="col-xs-2 col-sm-2 col-lg-2 border" >{data.Date}</div>
            <div className="col-xs-2 col-sm-2 col-lg-2 border" >{data.Holding_Name}</div>
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.Code_Units}</div>
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.Registered_Units}</div>
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.Available_Units}</div>
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.Reversed_Units}</div>
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.Purchase_Price}</div>
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.Total_Value}</div>
            <BtnPivotTable holding_id={data.id} user_id={user_id} isRemoveYes={true}> Add </BtnPivotTable>
        </div>) })
        const vRemoveFalse =  dataRemoveYesFalse.map(function(data, index){ return (
        <div key={index} className="row justify-content-center">
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.id}</div>
            <div className="col-xs-2 col-sm-2 col-lg-2 border" >{data.Date}</div>
            <div className="col-xs-2 col-sm-2 col-lg-2 border" >{data.Holding_Name}</div>
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.Code_Units}</div>
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.Registered_Units}</div>
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.Available_Units}</div>
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.Reversed_Units}</div>
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.Purchase_Price}</div>
            <div className="col-xs-1 col-sm-1 col-lg-1 border" >{data.Total_Value}</div>
            <BtnPivotTable  holding_id={data.id} user_id={user_id} isRemoveYes={false} > Remove </BtnPivotTable>
        </div>) })


        return( <div>
                    <div className="row justify-content-center">
                        <div className="col-xs-1 col-sm-1 col-lg-1 border" >No</div>
                        <div className="col-xs-2 col-sm-2 col-lg-2 border" >Date</div>
                        <div className="col-xs-2 col-sm-2 col-lg-2 border" >Name</div>
                        <div className="col-xs-1 col-sm-1 col-lg-1 border" >Code Units</div>
                        <div className="col-xs-1 col-sm-1 col-lg-1 border" >Registered Units</div>
                        <div className="col-xs-1 col-sm-1 col-lg-1 border" >Available Units</div>
                        <div className="col-xs-1 col-sm-1 col-lg-1 border" >Reversed Units</div>
                        <div className="col-xs-1 col-sm-1 col-lg-1 border" >Purchase Price</div>
                        <div className="col-xs-1 col-sm-1 col-lg-1 border" >Total Value</div>
                        <div className="col-xs-1 col-sm-1 col-lg-1 border" >Add/Remove</div>
                    </div>
                    {vRemoveTrue}
                    {vRemoveFalse}
                </div> )

    }
}


if(document.getElementById('btn_store_pivot_table')){
    const element = document.getElementById('btn_store_pivot_table');
    const dataset = element.dataset;
    const attributes = element.attributes
    ReactDOM.render(<BtnStorePivotTable {...dataset} {...attributes} />, element);
}


