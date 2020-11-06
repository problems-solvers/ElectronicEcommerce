const mysql=require('mysql');
const config=require('./config');
const connection =mysql.createConnection({
    host: config.HOST,
    user:config.USERNAME,
    password:config.PASSWORD,
    database:config.DATABASE_NAME
});
connection.connect();
module.exports={
    getPutMoney:(data)=>{
        var data = new Promise((resolve,reject)=>{  
        connection.query("SELECT sum(money) as put FROM `transaction` WHERE `recievedAccount`=? ",data,(err,result)=>{
            if(err)
            reject(err)
            else
            resolve(result)
        })
    })
    return data
    },
    getPullMoney:(data)=>{
        var data = new Promise((resolve,reject)=>{  
        connection.query("SELECT sum(money) as pull FROM `transaction` WHERE `paiedAccount`=?",data,(err,result)=>{
            if(err)
            reject(err)
            else
            resolve(result)
        })
    })
    return data
    },
    getcurrentaccount:(data)=>{
        var data = new Promise((resolve,reject)=>{  
        connection.query("SELECT * FROM `useraccount` WHERE `userName`= ?&&`BankNo`=? &&`expDate`=? ",[data.userName,data.BankNo,data.expDate],(err,result)=>{
            if(err)
            reject(err)
            else{
            
                    resolve(result)
           
            }
        })
    })
    return data
    },
   
    InsertNewTransaction:(data)=>{
        console.log(data)
        var data1 = new Promise((resolve,reject)=>{  
        connection.query("INSERT INTO `transaction` (`recievedAccount`, `paiedAccount`, `createdAt`, `transReason`, `money`) VALUES (?, ?, ?, ?, ?)",[data.recievedAccount,data.paiedAccount,data.createdAt,data.transReason,data.money],(err,result)=>{
            if(err)
            reject(err)
            else
            resolve(result)
        })
    })
    return data1
    },
}