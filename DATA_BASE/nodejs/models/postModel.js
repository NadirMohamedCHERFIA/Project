const mongoose=require('mongoose')
const getSchema = new mongoose.Schema({
    title :{
        type: string
    },
    body :{
        type: string
    }
})