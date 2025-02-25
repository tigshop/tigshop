import{d as D,j as m,E as U,s as F,x as O,K as _,r as n,o as V,c as z,e as x,k as H,w as r,b as o,H as I,h as K}from"./index-7c2d2aef.js";import{g as M}from"./languagesList-188697d2.js";import{c as $,a as A,u as G}from"./translationContent-0ce76c05.js";const J={class:"container"},P={class:"content_wrapper"},Q={class:"lyecs-form-table"},ee=D({__name:"Info",props:{id:{type:Number,default:0},data_type:{type:Number,default:0},act:{type:String,default:""},translation_name:{type:String,default:""},isDialog:{type:Boolean,default:!1}},emits:["submitCallback","update:confirmLoading","close"],setup(L,{expose:k,emit:C}){const i=C,s=L,p=m(!0),y=U().currentRoute.value.query,f=m(s.isDialog?s.act:String(y.act)),g=m(s.isDialog?s.id:Number(y.id)),E=f.value==="add"?"create":"update",v=F(),l=m({translation_name:s.translation_name,data_type:s.data_type,items:[]});O(()=>{f.value==="detail"?N():(p.value=!1,b())});const N=async()=>{try{const e=await $(f.value,{id:g.value});Object.assign(l.value,e.item),b()}catch(e){_.error(e.message),i("close")}finally{p.value=!1}},u=m([]),b=async()=>{try{const e=await M({is_enabled:1,size:-1});e.filter_result.forEach(a=>{a.translation_value=""}),Object.assign(u.value,e.filter_result),f.value==="detail"&&l.value.items.length>0&&l.value.items.forEach(a=>{u.value.forEach(t=>{a.locale_id===t.id&&(t.translation_value=a.translation_value)})})}catch(e){_.error(e.message),i("close")}finally{p.value=!1}},S=async e=>{await v.value.validate();try{u.value.forEach(async a=>{let t={code:a.locale_code,text:e};const c=await A(t);a.translation_value=c.translation.Translation})}catch(a){_.error(a.message)}},T=e=>{let a=[];return e.forEach(t=>{let c={locale_id:t.id,translation_value:t.translation_value};a.push(c)}),a},B=async()=>{await v.value.validate();try{i("update:confirmLoading",!0);const e=await G(E,{id:g.value,...l.value,items:T(u.value)});i("submitCallback",e),_.success(e.message)}catch(e){_.error(e.message)}finally{i("update:confirmLoading",!1)}};return k({onFormSubmit:()=>{B()}}),(e,a)=>{const t=n("el-input"),c=n("el-button"),h=n("el-form-item"),w=n("el-table-column"),R=n("el-table"),j=n("el-form");return V(),z("div",J,[x("div",P,[x("div",Q,[p.value?K("",!0):(V(),H(j,{key:0,ref_key:"formRef",ref:v,model:l.value,"label-width":"auto"},{default:r(()=>[o(h,{prop:"translation_name",label:"翻译原文：",rules:[{required:!0,message:"翻译原文不能为空!"}]},{default:r(()=>[o(t,{type:"text",maxlength:"60",modelValue:l.value.translation_name,"onUpdate:modelValue":a[0]||(a[0]=d=>l.value.translation_name=d),style:{width:"300px"},class:"mr10"},null,8,["modelValue"]),o(c,{type:"primary",onClick:a[1]||(a[1]=d=>S(l.value.translation_name))},{default:r(()=>[I("一键生成翻译")]),_:1})]),_:1}),o(h,{prop:"language",label:"翻译列表："},{default:r(()=>[o(R,{data:u.value,style:{width:"100%"}},{default:r(()=>[o(w,{prop:"language",label:"语言",width:"180"}),o(w,{prop:"translation_value",label:"翻译内容"},{default:r(({row:d})=>[o(t,{type:"text",modelValue:d.translation_value,"onUpdate:modelValue":q=>d.translation_value=q},null,8,["modelValue","onUpdate:modelValue"])]),_:1})]),_:1},8,["data"])]),_:1})]),_:1},8,["model"]))])])])}}});export{ee as default};
