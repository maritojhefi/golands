var baseNth=require("./_baseNth"),baseRest=require("./_baseRest"),toInteger=require("./toInteger");function nthArg(t){return t=toInteger(t),baseRest(function(e){return baseNth(e,t)})}module.exports=nthArg;