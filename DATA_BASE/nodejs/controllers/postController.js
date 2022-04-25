const Post = require('../models/postModel');
exports.getAllPosts = async (req,res,next)=> {
    try{
        const posts = await Post.find();
        res.status(200).json({
            status: 'succes',
            results: posts.length,
            data: {
                posts
            }
        })
    } catch(err) {
        res.status(400).json({
            status : 'fail'
        })
    }
};