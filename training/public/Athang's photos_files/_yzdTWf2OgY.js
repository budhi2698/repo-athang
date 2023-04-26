;/*FB_PKG_DELIM*/

__d("Clipboard",["Promise","UserAgent"],(function(a,b,c,d,e,f,g){function a(){return window.document&&window.document.queryCommandSupported instanceof Function&&window.document.queryCommandSupported("copy")&&!(c("UserAgent").isBrowser("Firefox < 41")||c("UserAgent").isPlatform("iOS < 10.3"))||c("UserAgent").isBrowser("Chrome >= 43")}function h(a,b){b=b||document.body;if(!b)return!1;var d=document.activeElement,e=!0,f=document.createElement("textarea");b.appendChild(f);f.value=a;if(c("UserAgent").isPlatform("iOS >= 10.3")){a=document.createRange();a.selectNodeContents(f);var g=window.getSelection();g.removeAllRanges();g.addRange(a);f.setSelectionRange(0,999999)}else f.select();try{e=document.execCommand("copy")}catch(a){e=!1}b.removeChild(f);d!=null&&d.focus();return e}function d(a){var c=window.navigator;if(c&&c.clipboard&&typeof c.clipboard.writeText==="function")return c.clipboard.writeText(a);return h(a)?b("Promise").resolve():b("Promise").reject()}g.isSupported=a;g.copy=h;g.copyAsync=d}),98);
__d("MLoggedOutUFILogger",["LoggedOutLoginSignupBarTypedLogger"],(function(a,b,c,d,e,f,g){"use strict";function h(a,b){new(c("LoggedOutLoginSignupBarTypedLogger"))().setEvent(a).setSurface(b).log()}function a(a){h("story_permalink_share_flyout_option_click",a)}g.log=h;g.logSharesheetClick=a}),98);
__d("XLoginController",["XController"],(function(a,b,c,d,e,f){e.exports=b("XController").create("/login/",{privacy_mutation_token:{type:"String"},email:{type:"String"},cuid:{type:"String"},app_id:{type:"Int"},api_key:{type:"String"},auth_token:{type:"String"},first_attempt:{type:"Exists",defaultValue:!1},social_plugin:{type:"String"},signed_next:{type:"Bool",defaultValue:!1},next:{type:"String"},li:{type:"String"},lhsrc:{type:"String"},dcode:{type:"Int"},profile_sharer_id:{type:"Int"},ref:{type:"String"},try_number:{type:"Int"},one_time_password:{type:"Bool",defaultValue:!1},device_id:{type:"String"},ig_cp_login:{type:"Bool",defaultValue:!1},pl_dbl:{type:"Bool",defaultValue:!1},notif_src:{type:"String"},sk:{type:"String"},partial_uri:{type:"String"},contact_point:{type:"String"},layout:{type:"String"},next_uri:{type:"String"},dyiRequest:{type:"Bool",defaultValue:!1},v:{type:"String"},return_session:{type:"String"},cancel:{type:"String"},cancel_url:{type:"String"},social_plugin_action:{type:"String"},page_id:{type:"String"},rcount:{type:"Int"},e:{type:"Int"},deact:{type:"String"},deact_messaging:{type:"Bool",defaultValue:!1},user_wants_http:{type:"Bool",defaultValue:!1},fbconnect:{type:"Exists",defaultValue:!1},canvas:{type:"Exists",defaultValue:!1},offline_access:{type:"Exists",defaultValue:!1},skip_api_login:{type:"Bool",defaultValue:!1},no_next_msg:{type:"Exists",defaultValue:!1},_fb_noscript:{type:"Exists",defaultValue:!1},nothacked:{type:"Bool",defaultValue:!1},isprivate:{type:"Bool",defaultValue:!1},fw2x:{type:"Bool",defaultValue:!1},uc_qa:{type:"Exists",defaultValue:!1},fl:{type:"Exists",defaultValue:!1},show_profileshare_nativebanner:{type:"Exists",defaultValue:!1},crst:{type:"Bool",defaultValue:!1},from_contact_claiming:{type:"Bool",defaultValue:!1},login_try_number:{type:"Int"},kid_directed_site:{type:"Bool",defaultValue:!1},signup_uri:{type:"String"},sign_up:{type:"String"},rs:{type:"Enum",enumType:0},delete_account:{type:"String"},rid:{type:"Int"},lrs:{type:"Enum",enumType:0},lrid:{type:"Int"},greeting_text:{type:"String"},ref_param:{type:"String"},request_id:{type:"String"},chat_plugin_upgrade:{type:"Bool",defaultValue:!1},re_engagement_opt_in:{type:"Bool",defaultValue:!1},guest_access_token:{type:"String"},referer_uri:{type:"String"},switch_user:{type:"String"},guest_id:{type:"String"},prompt_type:{type:"String"},ps_nf_cuid:{type:"String"},campaign_id:{type:"Int"},session_id:{type:"String"},hide_upsell:{type:"Bool",defaultValue:!1},hide_language_selector:{type:"Bool",defaultValue:!1},hide_registration:{type:"Bool",defaultValue:!1},shbl:{type:"Bool",defaultValue:!1},src:{type:"String"},lara_cancel:{type:"Bool",defaultValue:!1},fb_iaw_itp:{type:"Int"},nfx_context:{type:"String"},show_accounts_center_content:{type:"Bool",defaultValue:!1},funnel_id:{type:"String"},login_from_aymh:{type:"Bool",defaultValue:!1},in_checkpoint_fix_flow:{type:"Bool",defaultValue:!1}})}),null);
__d("MLoggedOutShareFlyout",["Clipboard","DataStore","Event","MLoggedOutUFILogger","SubscriptionsHandler","URI","XLoginController","gkx","goURI"],(function(a,b,c,d,e,f,g){"use strict";a=function(){function a(a){var b=this;this.$4=null;this.$7=function(a){var e=b.$10();e=c("XLoginController").getURIBuilder().setString("next",e.toString()).getURI();d("MLoggedOutUFILogger").logSharesheetClick(22);b.$11(e,a);b.$6()};this.$8=function(a){var e=b.$10(),f=b.$12();f!=null&&(e=e.addQueryData("scmts",f));f=new(c("URI"))("https://api.whatsapp.com/send").addQueryData({ref:"whatsapp_share_message",text:e.toString()});d("MLoggedOutUFILogger").logSharesheetClick(23);b.$11(f,a)};this.$9=function(a){a=b.$10().toString();if(a!=null){a=d("Clipboard").copy(a);a&&b.$1.hide()}};this.$1=a.flyout;this.$2=a.shareOptions;this.$3=a.loggedOutCTASurface;this.$5()}var b=a.prototype;b.$5=function(){this.$6(),this.$4=new(c("SubscriptionsHandler"))(),this.$4.addSubscriptions(c("Event").listen(this.$2.writePost,"click",this.$7.bind(this)),c("Event").listen(this.$2.sendInWA,"click",this.$8.bind(this)),this.$1.addListener("beforeshow",function(){d("MLoggedOutUFILogger").log("story_permalink_share_flyout_load")})),this.$2.copyLink!=null&&this.$4!=null&&this.$4.addSubscriptions(c("Event").listen(this.$2.copyLink,"click",this.$9.bind(this)))};b.$10=function(){var a=this.$1.getContext();a=d("DataStore").get(a,"shareable_uri","");return typeof a==="string"?new(c("URI"))(a).getQualifiedURI():new(c("URI"))("")};b.$11=function(a,b){c("goURI")(a),this.$1.hide(),b.preventDefault()};b.$6=function(){this.$4!=null&&this.$4.release()};b.$12=function(){return this.$3==="story_permalink"&&c("gkx")("1108874")?"scwsplos":null};return a}();g["default"]=a}),98);