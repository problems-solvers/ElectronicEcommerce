const express = require('express');
const bodyparser= require('body-parser');
const dbObject =require('./app_modules/db_works')
const app=express();
app.use(bodyparser.json());
app.use(bodyparser.urlencoded({extends:true}));

app.get("/api/getcurrentaccount",async (req,res)=>{
    console.log(req.query)
    if(Put>=Pull){}
   var x =await dbObject.getcurrentaccount(req.query);
   if(x[0] !=undefined){
   var Put = await dbObject.getPutMoney(x[0].BankNo)
   var Pull = await dbObject.getPullMoney(x[0].BankNo)
   console.log(Put[0].put,Pull[0].pull,req.query.totalPrice)
   if(Put[0].put>Pull[0].pull){
       if(req.query.totalPrice<=(Put[0].put-Pull[0].pull)){
        res.json({available : true} );

       }
       else{
       //error not enough 
       console.log((Put[0].put-Pull[0].pull),req.query.totalPrice)
       res.json({available : false, errorMessage:3} );

       }
   }
   else{
       //error no money 
    res.json({available : false, errorMessage:1} );
   }
}else{
    //no Accoount
    res.json({available : false,errorMessage:2} );
   }
});
app.post("/api/InsertNewTransaction",async (req,res)=>{
    console.log(req.body)
    res.json(await dbObject.InsertNewTransaction(req.body));
});
app.listen(5320,()=>{
    console.log("server Started Successfully...")
})
//http://localhost:5320/api/getcurrentaccount?userName=Dunia&BankNo=3233223&expDate=2020/232/32