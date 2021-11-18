<?php defined('ABSPATH') or die() ?>

<style type="text/css">
.switch{position:relative;display:inline-block;width:60px;height:34px}.switch input{opacity:0;width:0;height:0}.slider{position:absolute;cursor:pointer;top:0;left:0;right:0;bottom:0;background-color:#ccc;-webkit-transition:.4s;transition:.4s}.slider:before{position:absolute;content:"";height:26px;width:26px;left:4px;bottom:4px;background-color:white;-webkit-transition:.4s;transition:.4s}input:checked+.slider{background-color:#2196f3}input:focus+.slider{box-shadow:0 0 1px #2196f3}input:checked+.slider:before{-webkit-transform:translateX(26px);-ms-transform:translateX(26px);transform:translateX(26px)}.slider.round{border-radius:34px}.slider.round:before{border-radius:50%}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4{font-weight:600;line-height:1.2;margin:0 0 8px;text-rendering:optimizeLegibility}h1,.h1{font-size:1.5rem}h2,.h2{font-weight:700;font-size:1.125rem}h3,.h3{font-size:1rem}form{margin-bottom:0}.container{max-width:536px;margin:12vh auto 0 auto}.mrg-none{margin:0!important}.mrg-t-lg{margin-top:24px!important}.mrg-t-xs{margin-top:8px!important}.mrg-t-none{margin-top:0!important}.mrg-r-xs{margin-right:8px!important}.mrg-l-lg{margin-left:24px!important}.mrg-b-xs{margin-bottom:8px!important}.mrg-v-xs{margin-top:8px!important;margin-bottom:8px!important}.pad-l-xs{padding-left:8px!important}.inline-block{display:inline-block!important}.fly-flex{display:flex}.flex-wrap{flex-wrap:wrap}.fly-flex.direction-column{flex-direction:column}.v-align-middle{align-items:center}.jc-center{justify-content:center}.text--base{font-weight:400!important}.text--medium{font-weight:600!important}.text-center{text-align:center}.text-right{text-align:right}.fixed{position:fixed!important}.top-sm{top:12px}.left-sm{left:12px}.right-sm{right:12px}.border-none{border:none!important}.border-radius-none{border-radius:0!important}.z-0{z-index:0}.z-10{z-index:10}.fly-panel{background-color:#fff;border:1px solid;border-color:#ebecf2;border-radius:4px;margin-bottom:24px;min-height:24px;padding:0;position:relative;line-height:1.5}.fly-panel:after{content:"";display:table;clear:both}.fly-panel:last-child{margin-bottom:0}.fly-panel>*:first-child{border-top-left-radius:4px;border-top-right-radius:4px}.fly-panel>*:last-child{border-bottom-right-radius:4px;border-bottom-left-radius:4px}.fly-panel-body{margin-top:0;padding:24px}.fly-panel-body:after{content:"";display:table;clear:both}.fly-panel-body+.fly-panel-body{border-top:1px solid #ebecf2}.fly-btn{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;appearance:none;background-color:#ebecf2;border-radius:3px;border:1px solid #ebecf2;border-bottom-color:#c7c7d4;box-shadow:0 1px 1px -1px rgba(0,0,0,0.12);color:#343446;cursor:pointer;display:inline-block;font-family:inherit;font-size:.875rem;font-weight:600;margin:0;height:36px;line-height:34px;padding:0 1rem;position:relative;text-align:center;text-decoration:none;transition:box-shadow .1s ease;vertical-align:middle;white-space:nowrap}.fly-btn>.fly-icon{top:-1px}.fly-btn:hover{background-color:#c7c7d4;border-color:#a1a2b2;text-decoration:none}.fly-btn:active{box-shadow:0 2px 4px rgba(0,0,0,0.16) inset}.fly-btn:focus{border-color:#c7c7d4;outline:0}.fly-btn:focus::after{opacity:1}.fly-btn+.fly-btn{margin-left:4px}.fly-btn svg:only-child{margin:0 4px}.fly-btn::after{content:'';pointer-events:none;border:1px solid #a1a2b2;border-radius:3px;position:absolute;top:-1px;right:-1px;bottom:0;left:-1px;opacity:0}.fly-btn--primary{background-color:#5721cc;border-color:#5721cc;border-bottom-color:#331673;color:#fff;font-weight:600}.fly-btn--primary:focus{border-color:#331673}.fly-btn--primary:hover{background-color:#331673;border-color:#331673;color:#fff}.fly-btn--primary::after{border-color:#d6c2ff}.fly-alert{background-color:#fffae5;border-radius:4px;border:1px solid;border-color:transparent;border-bottom-color:#ffeb99;margin-bottom:24px;padding:8px 16px}.fly-alert a:not(.fly-btn):not(.fly-dropdown-toggle){text-decoration:underline}.fly-alert.is-success{background-color:#e6faf3;border-bottom-color:#99f0d4;color:#156352}.fly-alert.is-info{background-color:#e5fbfe;border-bottom-color:#80ecfa;color:#055666}.fly-svg-icon{display:inline-flex;vertical-align:middle;line-height:1}.fly-svg-icon__icon--lg{height:24px;width:24px}.fly-svg-icon__icon--success path{fill:#1e9e7c!important}.fly-dropdown{display:inline-block;max-width:100%;position:relative;vertical-align:middle;z-index:10}.fly-dropdown:before{bottom:1px;color:#6f7488;content:'\25be';line-height:34px;pointer-events:none;position:absolute;right:0;text-align:center;top:0;width:34px;z-index:5}.fly-dropdown select{-moz-osx-font-smoothing:grayscale;-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-user-select:inherit;user-select:inherit;border-radius:3px;border:1px solid #c7c7d4;cursor:pointer;font-family:inherit;font-size:.875rem;margin:0;height:36px;text-decoration:none;transform:translate3d(0,0,0);overflow:hidden;text-overflow:ellipsis;white-space:nowrap;background-color:#fff;box-shadow:none;color:#343446;font-weight:400;float:left;padding:0 2rem 0 2rem;position:relative;text-align:left;text-transform:initial;width:auto;line-height:1.5;max-width:100%}.language-flag{position:absolute;top:calc(50%+1px);left:12px;z-index:20;font-size:1rem;transform:translateY(-50%)}.m-0{margin:0}
</style>
<div class="wrap">

    <div class="fly-panel">

        <div class="fly-panel-body">

            <div class="fly-alert is-success m-0">

                <div class="mrg-b-xs fly-flex v-align-middle">

                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="fly-svg-icon__icon--lg fly-svg-icon__icon--success mrg-r-xs" role="img" aria-label="check-circle-full">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 8a8 8 0 0 1 8-8 8.01 8.01 0 0 1 8 8A8 8 0 1 1 0 8zm12.814-2.919a1 1 0 1 0-1.628-1.162l-4.314 6.04-2.165-2.166a1 1 0 0 0-1.414 1.414l3 3a1 1 0 0 0 1.52-.126l5-7z" fill="#6F7488"></path>
                    </svg>

                    <h1 class="h3 inline-block mrg-none">Well done!</h1>

                </div>

                <p>Custome Menu plugin show and hide the website front-end menu items depending on user roles.</p>
                <hr>
                <p class="mb-0">To get better resualt you should use WordPress standard menu and login with your account (Administrator, Customer or Subscriber):<br/>
                 Even menu items: Shown to Subscribers<br/>
                 Odd menu items: Shown to Customers<br/>
                 Admins can see all menus<br/>
                * The first menu item is number 1 and odd<br/>
                </p>

            </div>
        
        </div>

    </div>

    <h1 class="wp-heading-inline">User Menus Plugin Manager</h1>

    <hr class="wp-header-end">

    <br class="clear" />

    <form method="post">

        <table class="form-table">

            <tbody>

            	<tr>

                    <th scope="row">Deactive Plugin</th>

                    <td>

                        <label class="switch">

                            <input type="checkbox" name="plugin">

                            <span class="slider round"></span>

                        </label>

                    </td>

                </tr>

            </tbody>

        </table>

        <p class="submit">

        	<input type="submit" class="button button-primary" value="Save">

        </p>

    </form>

</div>
