<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Start booking api documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost:8000";
        var useCsrf = Boolean(1);
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.16.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.16.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-categories" class="tocify-header">
                <li class="tocify-item level-1" data-unique="categories">
                    <a href="#categories">Categories</a>
                </li>
                                    <ul id="tocify-subheader-categories" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="categories-GETapi-v1-categories">
                                <a href="#categories-GETapi-v1-categories">Show collection of categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="categories-POSTapi-v1-categories">
                                <a href="#categories-POSTapi-v1-categories">Create a new category</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="categories-GETapi-v1-categories--id-">
                                <a href="#categories-GETapi-v1-categories--id-">Show each individual category</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="categories-PUTapi-v1-categories--id-">
                                <a href="#categories-PUTapi-v1-categories--id-">Update existing category or it's subcategories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="categories-DELETEapi-v1-categories--id-">
                                <a href="#categories-DELETEapi-v1-categories--id-">Delete existing category or it's subcategories</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-reviews">
                                <a href="#endpoints-GETapi-v1-reviews">Show collection of reviews</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-reviews">
                                <a href="#endpoints-POSTapi-v1-reviews">Create a new review</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-reviews--id-">
                                <a href="#endpoints-GETapi-v1-reviews--id-">Show each individual category</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-reviews--id-">
                                <a href="#endpoints-PUTapi-v1-reviews--id-">Update a existing resource</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-reviews--id-">
                                <a href="#endpoints-DELETEapi-v1-reviews--id-">Delete existing review</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-currencies-list">
                                <a href="#endpoints-GETapi-v1-currencies-list">Show the list of currencies fetched from api</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-currencies">
                                <a href="#endpoints-GETapi-v1-currencies">Show collection of currencies</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-currencies">
                                <a href="#endpoints-POSTapi-v1-currencies">Create a new currency</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-currencies--id-">
                                <a href="#endpoints-GETapi-v1-currencies--id-">Show individual currency</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-currencies--id-">
                                <a href="#endpoints-DELETEapi-v1-currencies--id-">Delete existing currency</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-login-and-logout" class="tocify-header">
                <li class="tocify-item level-1" data-unique="login-and-logout">
                    <a href="#login-and-logout">Login and Logout</a>
                </li>
                                    <ul id="tocify-subheader-login-and-logout" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="login-and-logout-POSTapi-v1-login">
                                <a href="#login-and-logout-POSTapi-v1-login">User Login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="login-and-logout-POSTapi-v1-logout">
                                <a href="#login-and-logout-POSTapi-v1-logout">User Logout</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-products" class="tocify-header">
                <li class="tocify-item level-1" data-unique="products">
                    <a href="#products">Products</a>
                </li>
                                    <ul id="tocify-subheader-products" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="products-GETapi-v1-products">
                                <a href="#products-GETapi-v1-products">Show collection of products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="products-GETapi-v1-products--uuid-">
                                <a href="#products-GETapi-v1-products--uuid-">Show individual product</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-registration" class="tocify-header">
                <li class="tocify-item level-1" data-unique="registration">
                    <a href="#registration">Registration</a>
                </li>
                                    <ul id="tocify-subheader-registration" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="registration-POSTapi-v1-register">
                                <a href="#registration-POSTapi-v1-register">User Register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="registration-POSTapi-v1-verify">
                                <a href="#registration-POSTapi-v1-verify">Verify User</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="registration-POSTapi-v1-resend-code">
                                <a href="#registration-POSTapi-v1-resend-code">Resend code to the user</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-wizard" class="tocify-header">
                <li class="tocify-item level-1" data-unique="wizard">
                    <a href="#wizard">Wizard</a>
                </li>
                                    <ul id="tocify-subheader-wizard" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="wizard-POSTapi-v1-wizard-setup">
                                <a href="#wizard-POSTapi-v1-wizard-setup">Store Products with contacts</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="wizard-POSTapi-v1-wizard--product_uuid--services">
                                <a href="#wizard-POSTapi-v1-wizard--product_uuid--services">POST api/v1/wizard/{product_uuid}/services</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="wizard-POSTapi-v1-wizard--product_uuid--rooms">
                                <a href="#wizard-POSTapi-v1-wizard--product_uuid--rooms">This endpoint will create room for existing product</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 18, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This is documentation start booking project api </p>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is authenticated by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="categories">Categories</h1>

    <p>End points to see list of categories and individual category</p>

                                <h2 id="categories-GETapi-v1-categories">Show collection of categories</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-categories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 48,
        &quot;name&quot;: &quot;aliquid&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories"></code></pre>
</span>
<form id="form-GETapi-v1-categories" data-method="GET"
      data-path="api/v1/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-categories"
                    onclick="tryItOut('GETapi-v1-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-categories"
                    onclick="cancelTryOut('GETapi-v1-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-categories" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="categories-POSTapi-v1-categories">Create a new category</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"sport\",
    \"parent_id\": 12
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "sport",
    "parent_id": 12
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-categories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 49,
        &quot;name&quot;: &quot;sint&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-categories" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-categories"></code></pre>
</span>
<form id="form-POSTapi-v1-categories" data-method="POST"
      data-path="api/v1/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-categories"
                    onclick="tryItOut('POSTapi-v1-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-categories"
                    onclick="cancelTryOut('POSTapi-v1-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-categories" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-v1-categories"
               value="sport"
               data-component="body">
    <br>
<p>Name of the category. Example: <code>sport</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parent_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="parent_id"                data-endpoint="POSTapi-v1-categories"
               value="12"
               data-component="body">
    <br>
<p>nullable ID of the parent category for subcategory. Example: <code>12</code></p>
        </div>
        </form>

                    <h2 id="categories-GETapi-v1-categories--id-">Show each individual category</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-categories--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/categories/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/categories/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-categories--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 50,
        &quot;name&quot;: &quot;quo&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-categories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-categories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories--id-"></code></pre>
</span>
<form id="form-GETapi-v1-categories--id-" data-method="GET"
      data-path="api/v1/categories/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-categories--id-"
                    onclick="tryItOut('GETapi-v1-categories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-categories--id-"
                    onclick="cancelTryOut('GETapi-v1-categories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-categories--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/categories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-v1-categories--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="categories-PUTapi-v1-categories--id-">Update existing category or it&#039;s subcategories</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-categories--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/categories/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"sport\",
    \"parent_id\": 8
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/categories/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "sport",
    "parent_id": 8
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-categories--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 51,
        &quot;name&quot;: &quot;nihil&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-v1-categories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-categories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-categories--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-categories--id-"></code></pre>
</span>
<form id="form-PUTapi-v1-categories--id-" data-method="PUT"
      data-path="api/v1/categories/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-categories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-categories--id-"
                    onclick="tryItOut('PUTapi-v1-categories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-categories--id-"
                    onclick="cancelTryOut('PUTapi-v1-categories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-categories--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/categories/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/categories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-v1-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-v1-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PUTapi-v1-categories--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="PUTapi-v1-categories--id-"
               value="sport"
               data-component="body">
    <br>
<p>Name of the category. Example: <code>sport</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parent_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               name="parent_id"                data-endpoint="PUTapi-v1-categories--id-"
               value="8"
               data-component="body">
    <br>
<p>nullable ID of the parent category for subcategory. Example: <code>8</code></p>
        </div>
        </form>

                    <h2 id="categories-DELETEapi-v1-categories--id-">Delete existing category or it&#039;s subcategories</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-categories--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/categories/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/categories/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-categories--id-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (`auth`.`products`, CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)) (SQL: delete from `categories` where `id` = 1)&quot;,
    &quot;exception&quot;: &quot;Illuminate\\Database\\QueryException&quot;,
    &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php&quot;,
    &quot;line&quot;: 760,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php&quot;,
            &quot;line&quot;: 720,
            &quot;function&quot;: &quot;runQueryCallback&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php&quot;,
            &quot;line&quot;: 577,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php&quot;,
            &quot;line&quot;: 522,
            &quot;function&quot;: &quot;affectingStatement&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php&quot;,
            &quot;line&quot;: 3552,
            &quot;function&quot;: &quot;delete&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php&quot;,
            &quot;line&quot;: 1189,
            &quot;function&quot;: &quot;delete&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php&quot;,
            &quot;line&quot;: 1459,
            &quot;function&quot;: &quot;delete&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php&quot;,
            &quot;line&quot;: 1404,
            &quot;function&quot;: &quot;performDeleteOnModel&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Model&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\app\\Http\\Controllers\\V1\\Products\\CategoryController.php&quot;,
            &quot;line&quot;: 135,
            &quot;function&quot;: &quot;delete&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Model&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;destroy&quot;,
            &quot;class&quot;: &quot;App\\Http\\Controllers\\V1\\Products\\CategoryController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php&quot;,
            &quot;line&quot;: 43,
            &quot;function&quot;: &quot;callAction&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Controller&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 260,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 205,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 798,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;handleRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;handleRequestUsingNamedLimiter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 799,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 776,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 740,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 729,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 190,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php&quot;,
            &quot;line&quot;: 52,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Fruitcake\\Cors\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 165,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 134,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 92,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 209,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 166,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 95,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 124,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 71,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 49,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 51,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 661,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 312,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 153,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 1022,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 314,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 168,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 155,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;C:\\xampp\\htdocs\\cookbook\\artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-categories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-categories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-categories--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-categories--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-categories--id-" data-method="DELETE"
      data-path="api/v1/categories/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-categories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-categories--id-"
                    onclick="tryItOut('DELETEapi-v1-categories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-categories--id-"
                    onclick="cancelTryOut('DELETEapi-v1-categories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-categories--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/categories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-v1-categories--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-v1-reviews">Show collection of reviews</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-reviews">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/reviews" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/reviews"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-reviews">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;rating&quot;: 3,
        &quot;body&quot;: &quot;Quasi est aut voluptas placeat eos. Omnis exercitationem dolorem quod ea excepturi. Nihil rem maxime aut est. Est ea in ut dolor est labore.&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-reviews" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-reviews"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-reviews" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-reviews" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-reviews"></code></pre>
</span>
<form id="form-GETapi-v1-reviews" data-method="GET"
      data-path="api/v1/reviews"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-reviews', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-reviews"
                    onclick="tryItOut('GETapi-v1-reviews');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-reviews"
                    onclick="cancelTryOut('GETapi-v1-reviews');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-reviews" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/reviews</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-reviews"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-reviews"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-reviews">Create a new review</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-reviews">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/reviews" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"content\": \"the worst product ever\",
    \"product_uuid\": \"libero\",
    \"rating\": \"k\",
    \"product_id\": \"repudiandae\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/reviews"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "content": "the worst product ever",
    "product_uuid": "libero",
    "rating": "k",
    "product_id": "repudiandae"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-reviews">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;rating&quot;: 4,
        &quot;body&quot;: &quot;Temporibus officiis autem sed enim rem et accusantium. Rem consequatur molestias dolorem tenetur et. Dolores quis repellendus totam velit et fugit. Vitae fugit perspiciatis ea reiciendis reiciendis quo quia soluta. Vel et consequatur amet vel nisi consectetur laborum.&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-reviews" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-reviews"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-reviews" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-reviews" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-reviews"></code></pre>
</span>
<form id="form-POSTapi-v1-reviews" data-method="POST"
      data-path="api/v1/reviews"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-reviews', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-reviews"
                    onclick="tryItOut('POSTapi-v1-reviews');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-reviews"
                    onclick="cancelTryOut('POSTapi-v1-reviews');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-reviews" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/reviews</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-reviews"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-reviews"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="content"                data-endpoint="POSTapi-v1-reviews"
               value="the worst product ever"
               data-component="body">
    <br>
<p>string Body of the review. Example: <code>the worst product ever</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_uuid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="product_uuid"                data-endpoint="POSTapi-v1-reviews"
               value="libero"
               data-component="body">
    <br>
<p>Example: <code>libero</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rating</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="rating"                data-endpoint="POSTapi-v1-reviews"
               value="k"
               data-component="body">
    <br>
<p>Must be at least 1 character. Must not be greater than 5 characters. Example: <code>k</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="product_id"                data-endpoint="POSTapi-v1-reviews"
               value="repudiandae"
               data-component="body">
    <br>
<p>ID of product related to the review Example: <code>repudiandae</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-reviews--id-">Show each individual category</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-reviews--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/reviews/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/reviews/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-reviews--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;rating&quot;: 3,
        &quot;body&quot;: &quot;Aut ullam error est qui non reiciendis deserunt. Odit quaerat repudiandae ut qui aliquam ipsa fuga. Corrupti non optio tempora molestiae dolores ut. Voluptas aut ducimus est maiores qui ipsam vitae.&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-reviews--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-reviews--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-reviews--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-reviews--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-reviews--id-"></code></pre>
</span>
<form id="form-GETapi-v1-reviews--id-" data-method="GET"
      data-path="api/v1/reviews/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-reviews--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-reviews--id-"
                    onclick="tryItOut('GETapi-v1-reviews--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-reviews--id-"
                    onclick="cancelTryOut('GETapi-v1-reviews--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-reviews--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/reviews/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-reviews--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-reviews--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-v1-reviews--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the review. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-reviews--id-">Update a existing resource</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-reviews--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/reviews/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"content\": \"the worst product ever\",
    \"product_id\": \"aut\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/reviews/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "content": "the worst product ever",
    "product_id": "aut"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-reviews--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;rating&quot;: 2,
        &quot;body&quot;: &quot;Facilis officiis accusamus impedit ipsum occaecati at nobis est. Perspiciatis quo aut similique quo iusto repellat reiciendis modi. Magnam reprehenderit repellat voluptatem rerum sequi. A nemo quisquam odio consequatur excepturi. Exercitationem nostrum nobis et qui. Quia suscipit earum qui repudiandae non dolor ullam.&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-v1-reviews--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-reviews--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-reviews--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-reviews--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-reviews--id-"></code></pre>
</span>
<form id="form-PUTapi-v1-reviews--id-" data-method="PUT"
      data-path="api/v1/reviews/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-reviews--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-reviews--id-"
                    onclick="tryItOut('PUTapi-v1-reviews--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-reviews--id-"
                    onclick="cancelTryOut('PUTapi-v1-reviews--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-reviews--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/reviews/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/reviews/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-v1-reviews--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-v1-reviews--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PUTapi-v1-reviews--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the review. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="content"                data-endpoint="PUTapi-v1-reviews--id-"
               value="the worst product ever"
               data-component="body">
    <br>
<p>string Body of the review. Example: <code>the worst product ever</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="product_id"                data-endpoint="PUTapi-v1-reviews--id-"
               value="aut"
               data-component="body">
    <br>
<p>ID of product related to the review Example: <code>aut</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-v1-reviews--id-">Delete existing review</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-reviews--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/reviews/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/reviews/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-reviews--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Review deleted successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-reviews--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-reviews--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-reviews--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-reviews--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-reviews--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-reviews--id-" data-method="DELETE"
      data-path="api/v1/reviews/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-reviews--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-reviews--id-"
                    onclick="tryItOut('DELETEapi-v1-reviews--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-reviews--id-"
                    onclick="cancelTryOut('DELETEapi-v1-reviews--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-reviews--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/reviews/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-reviews--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-reviews--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-v1-reviews--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the review. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-currencies-list">Show the list of currencies fetched from api</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-currencies-list">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/currencies/list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/currencies/list"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-currencies-list">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;name&quot;: &quot;Uzbek sum&quot;,
        &quot;code&quot;: &quot;Uzs&quot;,
        &quot;value&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
 &quot;data&quot; : [
 &quot;name&quot;: &quot;US Dollar&quot;,
 &quot;code&quot;: &quot;USD&quot;,
 &quot;value&quot;: &quot;11421.00&quot;
]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-currencies-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-currencies-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-currencies-list" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-currencies-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-currencies-list"></code></pre>
</span>
<form id="form-GETapi-v1-currencies-list" data-method="GET"
      data-path="api/v1/currencies/list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-currencies-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-currencies-list"
                    onclick="tryItOut('GETapi-v1-currencies-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-currencies-list"
                    onclick="cancelTryOut('GETapi-v1-currencies-list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-currencies-list" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/currencies/list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-currencies-list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-currencies-list"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-currencies">Show collection of currencies</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-currencies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/currencies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/currencies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-currencies">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;code&quot;: &quot;Uzs&quot;,
        &quot;name&quot;: &quot;Uzbek sum&quot;,
        &quot;value&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
&quot;data&quot;: [
{
&quot;id&quot;: 1,
&quot;code&quot;: &quot;Uzs&quot;,
&quot;name&quot;: &quot;Uzbek sum&quot;,
&quot;value&quot;: 1
},
{
&quot;id&quot;: 2,
&quot;code&quot;: &quot;USD&quot;,
&quot;name&quot;: &quot;US Dollar&quot;,
&quot;value&quot;: 11421
},
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-currencies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-currencies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-currencies" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-currencies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-currencies"></code></pre>
</span>
<form id="form-GETapi-v1-currencies" data-method="GET"
      data-path="api/v1/currencies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-currencies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-currencies"
                    onclick="tryItOut('GETapi-v1-currencies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-currencies"
                    onclick="cancelTryOut('GETapi-v1-currencies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-currencies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/currencies</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-currencies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-currencies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-currencies">Create a new currency</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-currencies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/currencies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"code\": \"USD\",
    \"name\": \"US Dollar\",
    \"value\": \"US Dollar = 11000 Uzbek Sum,\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/currencies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "code": "USD",
    "name": "US Dollar",
    "value": "US Dollar = 11000 Uzbek Sum,"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-currencies">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;code&quot;: &quot;Uzs&quot;,
        &quot;name&quot;: &quot;Uzbek sum&quot;,
        &quot;value&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;New currency added successfully&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;British Pound&quot;,
        &quot;code&quot;: &quot;GBP&quot;,
        &quot;value&quot;: 10022
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-currencies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-currencies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-currencies" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-currencies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-currencies"></code></pre>
</span>
<form id="form-POSTapi-v1-currencies" data-method="POST"
      data-path="api/v1/currencies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-currencies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-currencies"
                    onclick="tryItOut('POSTapi-v1-currencies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-currencies"
                    onclick="cancelTryOut('POSTapi-v1-currencies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-currencies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/currencies</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-currencies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-currencies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="code"                data-endpoint="POSTapi-v1-currencies"
               value="USD"
               data-component="body">
    <br>
<p>Code of the currency. Example: <code>USD</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-v1-currencies"
               value="US Dollar"
               data-component="body">
    <br>
<p>Name of the currency. Example: <code>US Dollar</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>value</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="value"                data-endpoint="POSTapi-v1-currencies"
               value="US Dollar = 11000 Uzbek Sum,"
               data-component="body">
    <br>
<p>Value of the currency. Example: <code>US Dollar = 11000 Uzbek Sum,</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-currencies--id-">Show individual currency</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-currencies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/currencies/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/currencies/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-currencies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;code&quot;: &quot;Uzs&quot;,
        &quot;name&quot;: &quot;Uzbek sum&quot;,
        &quot;value&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;code&quot;: &quot;Uzs&quot;,
        &quot;name&quot;: &quot;Uzbek sum&quot;,
        &quot;value&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-currencies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-currencies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-currencies--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-currencies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-currencies--id-"></code></pre>
</span>
<form id="form-GETapi-v1-currencies--id-" data-method="GET"
      data-path="api/v1/currencies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-currencies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-currencies--id-"
                    onclick="tryItOut('GETapi-v1-currencies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-currencies--id-"
                    onclick="cancelTryOut('GETapi-v1-currencies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-currencies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/currencies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-currencies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-currencies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-v1-currencies--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the currency. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-currencies--id-">Delete existing currency</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-currencies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/currencies/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/currencies/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-currencies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;US Dollar can&#039;t be deleted&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-currencies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-currencies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-currencies--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-currencies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-currencies--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-currencies--id-" data-method="DELETE"
      data-path="api/v1/currencies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-currencies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-currencies--id-"
                    onclick="tryItOut('DELETEapi-v1-currencies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-currencies--id-"
                    onclick="cancelTryOut('DELETEapi-v1-currencies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-currencies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/currencies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-currencies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-currencies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-v1-currencies--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the currency. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="login-and-logout">Login and Logout</h1>

    <p>End points to register and logout users</p>

                                <h2 id="login-and-logout-POSTapi-v1-login">User Login</h2>

<p>
</p>

<p>This endpoint will allow to log in users</p>

<span id="example-requests-POSTapi-v1-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Authorization: Bearer {token}" \
    --data "{
    \"email\": \"admin@gmail.com\",
    \"password\": \"123asd2\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "email": "admin@gmail.com",
    "password": "123asd2"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;firstname&quot;: &quot;Rodger&quot;,
        &quot;lastname&quot;: &quot;D&#039;Amore&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;token&quot;: &quot;1|fMyN7p4LYO89olWWJmCct1sY3seIdR7wsZqIJ9Xd&quot;,
    &quot;message&quot;: &quot;Welcome back Avaz&quot;,
    &quot;data&quot;: {
        &quot;firstname&quot;: &quot;Avaz&quot;,
        &quot;lastname&quot;: &quot;Akhmedov&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-login" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-login"></code></pre>
</span>
<form id="form-POSTapi-v1-login" data-method="POST"
      data-path="api/v1/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-login"
                    onclick="tryItOut('POSTapi-v1-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-login"
                    onclick="cancelTryOut('POSTapi-v1-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization"                data-endpoint="POSTapi-v1-login"
               value="Bearer {token}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {token}</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-v1-login"
               value="admin@gmail.com"
               data-component="body">
    <br>
<p>Email of existing user. Example: <code>admin@gmail.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-v1-login"
               value="123asd2"
               data-component="body">
    <br>
<p>Password of existing user. Example: <code>123asd2</code></p>
        </div>
        </form>

                    <h2 id="login-and-logout-POSTapi-v1-logout">User Logout</h2>

<p>
</p>

<p>This endpoint will allow to log out users</p>

<span id="example-requests-POSTapi-v1-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Authorization/Type:Bearer: Token. Example: 44|cSi4RtDPHw6vjnqiR3oKUP1x963fj1VcW9fMLmUF"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization/Type:Bearer": "Token. Example: 44|cSi4RtDPHw6vjnqiR3oKUP1x963fj1VcW9fMLmUF",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-logout">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-logout" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-logout"></code></pre>
</span>
<form id="form-POSTapi-v1-logout" data-method="POST"
      data-path="api/v1/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-logout"
                    onclick="tryItOut('POSTapi-v1-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-logout"
                    onclick="cancelTryOut('POSTapi-v1-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-logout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization/Type:Bearer</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization/Type:Bearer"                data-endpoint="POSTapi-v1-logout"
               value="Token. Example: 44|cSi4RtDPHw6vjnqiR3oKUP1x963fj1VcW9fMLmUF"
               data-component="header">
    <br>
<p>Example: <code>Token. Example: 44|cSi4RtDPHw6vjnqiR3oKUP1x963fj1VcW9fMLmUF</code></p>
            </div>
                        </form>

                <h1 id="products">Products</h1>

    <p>End points to see list of products and individual product</p>

                                <h2 id="products-GETapi-v1-products">Show collection of products</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;0edc636a-011e-429c-bc8c-b8d4c6f2f948&quot;,
        &quot;name&quot;: &quot;Dolores quis assumenda sint voluptatem inventore.&quot;,
        &quot;description&quot;: &quot;Culpa ut qui illo magni tenetur dolores est. Facere ipsa eveniet quia ex voluptas dolores. Dolorem ratione cum accusamus molestias repellendus libero. Ea molestias eveniet quos cumque est. Voluptas rem natus amet accusantium exercitationem. Ipsam dignissimos dolore aut dolor dolor ab eveniet est.&quot;,
        &quot;country&quot;: &quot;Uzbekistan&quot;,
        &quot;city&quot;: &quot;burgh&quot;,
        &quot;location&quot;: &quot;Accusantium aliquid quaerat qui enim mollitia.&quot;,
        &quot;rating&quot;: 2,
        &quot;postalCode&quot;: 112332,
        &quot;rate&quot;: &quot;0,00&quot;,
        &quot;isPetAllowed&quot;: false
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-products" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-products"></code></pre>
</span>
<form id="form-GETapi-v1-products" data-method="GET"
      data-path="api/v1/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-products"
                    onclick="tryItOut('GETapi-v1-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-products"
                    onclick="cancelTryOut('GETapi-v1-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-products" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="products-GETapi-v1-products--uuid-">Show individual product</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-products--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/products/65be9d21-9bdd-4138-a2ee-2dbc0363e5a7" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/products/65be9d21-9bdd-4138-a2ee-2dbc0363e5a7"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-products--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;97df19a4-7b76-467e-b230-c7d35361dd51&quot;,
        &quot;name&quot;: &quot;Maxime explicabo quo quae quod pariatur.&quot;,
        &quot;description&quot;: &quot;Eos ratione omnis vel itaque occaecati ut. Atque dolores dolores dolorum. Assumenda molestiae consequuntur non dignissimos aut delectus. Nam repellendus aut iste ea sapiente veniam officia rerum. Sit corrupti totam non laudantium dolorum. Dolores voluptate illum alias facere quidem dignissimos. Sed eum amet aut nihil eius distinctio dignissimos. Unde qui omnis suscipit a esse et asperiores. Eum sapiente omnis assumenda alias nesciunt placeat.&quot;,
        &quot;country&quot;: &quot;Armenia&quot;,
        &quot;city&quot;: &quot;bury&quot;,
        &quot;location&quot;: &quot;Aliquam aut blanditiis et qui.&quot;,
        &quot;rating&quot;: 2,
        &quot;postalCode&quot;: 112332,
        &quot;rate&quot;: &quot;0,00&quot;,
        &quot;isPetAllowed&quot;: false
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-products--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-products--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-products--uuid-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-products--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-products--uuid-"></code></pre>
</span>
<form id="form-GETapi-v1-products--uuid-" data-method="GET"
      data-path="api/v1/products/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-products--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-products--uuid-"
                    onclick="tryItOut('GETapi-v1-products--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-products--uuid-"
                    onclick="cancelTryOut('GETapi-v1-products--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-products--uuid-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/products/{uuid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-products--uuid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-products--uuid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>uuid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="uuid"                data-endpoint="GETapi-v1-products--uuid-"
               value="65be9d21-9bdd-4138-a2ee-2dbc0363e5a7"
               data-component="url">
    <br>
<p>Example: <code>65be9d21-9bdd-4138-a2ee-2dbc0363e5a7</code></p>
            </div>
                    </form>

                <h1 id="registration">Registration</h1>

    <p>End points register users</p>

                                <h2 id="registration-POSTapi-v1-register">User Register</h2>

<p>
</p>

<p>This endpoint will allow to register users</p>

<span id="example-requests-POSTapi-v1-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"firstname\": \"Avaz\",
    \"lastname\": \"Akhmedov\",
    \"surname\": \"Something\",
    \"birthdate\": \"1997.02.09\",
    \"country_id\": \"Tashkent\",
    \"primary_number\": \"99877822112\",
    \"number\": \"99822133211\",
    \"optional_number\": \"53121213123\",
    \"email\": \"admin@gmail.com\",
    \"password\": \"123asd2\",
    \"password_confirmation\": \"123asd2\",
    \"gender\": \"male or female\",
    \"preferred_contact_method\": \"nostrum\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "firstname": "Avaz",
    "lastname": "Akhmedov",
    "surname": "Something",
    "birthdate": "1997.02.09",
    "country_id": "Tashkent",
    "primary_number": "99877822112",
    "number": "99822133211",
    "optional_number": "53121213123",
    "email": "admin@gmail.com",
    "password": "123asd2",
    "password_confirmation": "123asd2",
    "gender": "male or female",
    "preferred_contact_method": "nostrum"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Pincode was sent&quot;,
    &quot;pincode&quot;: 577779
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-register" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-register"></code></pre>
</span>
<form id="form-POSTapi-v1-register" data-method="POST"
      data-path="api/v1/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-register"
                    onclick="tryItOut('POSTapi-v1-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-register"
                    onclick="cancelTryOut('POSTapi-v1-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>firstname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="firstname"                data-endpoint="POSTapi-v1-register"
               value="Avaz"
               data-component="body">
    <br>
<p>Firstname of user. Example: <code>Avaz</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>lastname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="lastname"                data-endpoint="POSTapi-v1-register"
               value="Akhmedov"
               data-component="body">
    <br>
<p>Lastname of user. Example: <code>Akhmedov</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>surname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="surname"                data-endpoint="POSTapi-v1-register"
               value="Something"
               data-component="body">
    <br>
<p>nullable  Surname of user. Example: <code>Something</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>birthdate</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="birthdate"                data-endpoint="POSTapi-v1-register"
               value="1997.02.09"
               data-component="body">
    <br>
<p>nullable  Birthdate of user. Example: <code>1997.02.09</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>nullable</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="country_id"                data-endpoint="POSTapi-v1-register"
               value="Tashkent"
               data-component="body">
    <br>
<p>constrained  City of user. Example: <code>Tashkent</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="city_id"                data-endpoint="POSTapi-v1-register"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>primary_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="primary_number"                data-endpoint="POSTapi-v1-register"
               value="99877822112"
               data-component="body">
    <br>
<p>Main number of user. Example: <code>99877822112</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="number"                data-endpoint="POSTapi-v1-register"
               value="99822133211"
               data-component="body">
    <br>
<p>Second number of user. Example: <code>99822133211</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>optional_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="optional_number"                data-endpoint="POSTapi-v1-register"
               value="53121213123"
               data-component="body">
    <br>
<p>nullable  Optional number of user. Example: <code>53121213123</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>email</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-v1-register"
               value="admin@gmail.com"
               data-component="body">
    <br>
<p>unique Email of user. Example: <code>admin@gmail.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-v1-register"
               value="123asd2"
               data-component="body">
    <br>
<p>Password of user. Example: <code>123asd2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="password_confirmation"                data-endpoint="POSTapi-v1-register"
               value="123asd2"
               data-component="body">
    <br>
<p>Confirm previous password. Example: <code>123asd2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="gender"                data-endpoint="POSTapi-v1-register"
               value="male or female"
               data-component="body">
    <br>
<p>nullable  Gender of user. Example: <code>male or female</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>preferred_contact_method</code></b>&nbsp;&nbsp;
<small>Preferred</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="preferred_contact_method"                data-endpoint="POSTapi-v1-register"
               value="nostrum"
               data-component="body">
    <br>
<p>method of user to contact.Default email Example: <code>nostrum</code></p>
        </div>
        </form>

                    <h2 id="registration-POSTapi-v1-verify">Verify User</h2>

<p>
</p>

<p>This endpoint will verify user and save him to database</p>

<span id="example-requests-POSTapi-v1-verify">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/verify" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"code\": \"deleniti\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/verify"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "code": "deleniti"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-verify">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;firstname&quot;: &quot;Maynard&quot;,
        &quot;lastname&quot;: &quot;Stoltenberg&quot;,
        &quot;country&quot;: &quot;Kazakhstan&quot;,
        &quot;primaryNumber&quot;: &quot;19405418402&quot;,
        &quot;number&quot;: &quot;15633446252&quot;,
        &quot;email&quot;: &quot;tevin.ernser@okon.com&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;token&quot;: &quot;1|fMyN7p4LYO89olWWJmCct1sY3seIdR7wsZqIJ9Xd&quot;,
    &quot;message&quot;: &quot;Successfully verified&quot;,
    &quot;data&quot;: {
        &quot;firstname&quot;: &quot;Avaz&quot;,
        &quot;lastname&quot;: &quot;Akhmedov&quot;,
        &quot;country&quot;: &quot;Uzbekistan&quot;,
        &quot;primaryNumber&quot;: &quot;9987977212&quot;,
        &quot;number&quot;: &quot;9984321122&quot;,
        &quot;email&quot;: &quot;avaz.corp@gmail.com&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-verify" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-verify"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-verify" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-verify" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-verify"></code></pre>
</span>
<form id="form-POSTapi-v1-verify" data-method="POST"
      data-path="api/v1/verify"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-verify', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-verify"
                    onclick="tryItOut('POSTapi-v1-verify');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-verify"
                    onclick="cancelTryOut('POSTapi-v1-verify');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-verify" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/verify</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-verify"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-verify"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>required.</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="code"                data-endpoint="POSTapi-v1-verify"
               value="deleniti"
               data-component="body">
    <br>
<p>Example: <code>deleniti</code></p>
        </div>
        </form>

                    <h2 id="registration-POSTapi-v1-resend-code">Resend code to the user</h2>

<p>
</p>

<p>This endpoint will send new code to the user by deleting previous one</p>

<span id="example-requests-POSTapi-v1-resend-code">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/resend-code" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"number\": \"9987872133\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/resend-code"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "number": "9987872133"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-resend-code">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-resend-code" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-resend-code"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-resend-code" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-resend-code" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-resend-code"></code></pre>
</span>
<form id="form-POSTapi-v1-resend-code" data-method="POST"
      data-path="api/v1/resend-code"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-resend-code', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-resend-code"
                    onclick="tryItOut('POSTapi-v1-resend-code');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-resend-code"
                    onclick="cancelTryOut('POSTapi-v1-resend-code');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-resend-code" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/resend-code</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-resend-code"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-resend-code"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>number</code></b>&nbsp;&nbsp;
<small>required.Exists</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="number"                data-endpoint="POSTapi-v1-resend-code"
               value="9987872133"
               data-component="body">
    <br>
<p>in users primary_number column. Example: <code>9987872133</code></p>
        </div>
        </form>

                <h1 id="wizard">Wizard</h1>

    <p>End points for wizard or multistep form</p>

                                <h2 id="wizard-POSTapi-v1-wizard-setup">Store Products with contacts</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-wizard-setup">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/wizard/setup" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"category_id\": \"Hotel\",
    \"name\": \"La-mare\",
    \"description\": \"Doloribus nisi eos quos aspernatur.\",
    \"images\": \"eum\",
    \"postal_code\": \"consequatur\",
    \"location\": \"ex\",
    \"city_id\": \"Moscow\",
    \"country_id\": \"Russia\",
    \"contacts\": \"eum\",
    \"rating\": \"3,5\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/wizard/setup"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": "Hotel",
    "name": "La-mare",
    "description": "Doloribus nisi eos quos aspernatur.",
    "images": "eum",
    "postal_code": "consequatur",
    "location": "ex",
    "city_id": "Moscow",
    "country_id": "Russia",
    "contacts": "eum",
    "rating": "3,5"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-wizard-setup">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;0f44eb84-1399-499b-8ea7-9b4d1825d771&quot;,
        &quot;name&quot;: &quot;Fugit vel consequuntur sint et occaecati.&quot;,
        &quot;description&quot;: &quot;Enim nobis nesciunt et voluptas atque cumque sed commodi. Aut quia eos voluptatem quas. Id pariatur nostrum quo vel et et aut. Quasi est quae similique et rem. Praesentium ut sint magnam exercitationem accusamus minima.&quot;,
        &quot;category&quot;: {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Single-family home&quot;
        },
        &quot;country&quot;: &quot;Turkey&quot;,
        &quot;city&quot;: &quot;furt&quot;,
        &quot;postalCode&quot;: 112332,
        &quot;location&quot;: &quot;Maiores porro pariatur totam molestiae error quaerat odit nisi.&quot;,
        &quot;images&quot;: [],
        &quot;isPetAllowed&quot;: false,
        &quot;rating&quot;: 5,
        &quot;contacts&quot;: []
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;First step is done&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: &quot;70d7379f-0845-497c-a5ad-cfa9af32c64e&quot;,
        &quot;name&quot;: &quot;La maree&quot;,
        &quot;description&quot;: &quot;The best hotel ever&quot;,
        &quot;category&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Hotel&quot;
        },
        &quot;country&quot;: &quot;Uzbekistan&quot;,
        &quot;city&quot;: &quot;view&quot;,
        &quot;postalCode&quot;: &quot;112332&quot;,
        &quot;location&quot;: &quot;Somewhere&quot;,
        &quot;images&quot;: [
            {
                &quot;media_id&quot;: 1,
                &quot;url&quot;: &quot;http://localhost:8000/storage/1/4.jfif&quot;
            },
            {
                &quot;media_id&quot;: 2,
                &quot;url&quot;: &quot;http://localhost:8000/storage/2/3.jfif&quot;
            }
        ],
        &quot;isPetAllowed&quot;: false,
        &quot;rating&quot;: &quot;3&quot;,
        &quot;contacts&quot;: [
            {
                &quot;name&quot;: &quot;Avaz Akhmedov&quot;,
                &quot;phoneNumber&quot;: &quot;9987972212&quot;
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-wizard-setup" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-wizard-setup"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-wizard-setup" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-wizard-setup" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-wizard-setup"></code></pre>
</span>
<form id="form-POSTapi-v1-wizard-setup" data-method="POST"
      data-path="api/v1/wizard/setup"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-wizard-setup', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-wizard-setup"
                    onclick="tryItOut('POSTapi-v1-wizard-setup');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-wizard-setup"
                    onclick="cancelTryOut('POSTapi-v1-wizard-setup');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-wizard-setup" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/wizard/setup</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-wizard-setup"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-wizard-setup"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="category_id"                data-endpoint="POSTapi-v1-wizard-setup"
               value="Hotel"
               data-component="body">
    <br>
<p>exists:categories,id. Example: <code>Hotel</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-v1-wizard-setup"
               value="La-mare"
               data-component="body">
    <br>
<p>string unique. Example: <code>La-mare</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>required.Example:</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="description"                data-endpoint="POSTapi-v1-wizard-setup"
               value="Doloribus nisi eos quos aspernatur."
               data-component="body">
    <br>
<p>the Best hotel with all facilities Example: <code>Doloribus nisi eos quos aspernatur.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>images</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="images"                data-endpoint="POSTapi-v1-wizard-setup"
               value="eum"
               data-component="body">
    <br>
<p>array. Example: <code>eum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>postal_code</code></b>&nbsp;&nbsp;
<small>required.Example:112332</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="postal_code"                data-endpoint="POSTapi-v1-wizard-setup"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="location"                data-endpoint="POSTapi-v1-wizard-setup"
               value="ex"
               data-component="body">
    <br>
<p>.Some street Example: <code>ex</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="city_id"                data-endpoint="POSTapi-v1-wizard-setup"
               value="Moscow"
               data-component="body">
    <br>
<p>exists:cities,id. Example: <code>Moscow</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="country_id"                data-endpoint="POSTapi-v1-wizard-setup"
               value="Russia"
               data-component="body">
    <br>
<p>exists:countries,id. Example: <code>Russia</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>contacts</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
<br>
<p>array.Example[name =&gt; Avaz,number =&gt; 7975452] Example: <code>eum</code></p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="contacts.0.name"                data-endpoint="POSTapi-v1-wizard-setup"
               value="flcrwofrmpwc"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>flcrwofrmpwc</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>number</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="contacts.0.number"                data-endpoint="POSTapi-v1-wizard-setup"
               value=" 41"
               data-component="body">
    <br>
<p>Must match the regex /^[0-9 ]+$/. Example: <code>41</code></p>
                    </div>
                                    </details>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rating</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="rating"                data-endpoint="POSTapi-v1-wizard-setup"
               value="3,5"
               data-component="body">
    <br>
<p>float Rating of the hotel. Example: <code>3,5</code></p>
        </div>
        </form>

                    <h2 id="wizard-POSTapi-v1-wizard--product_uuid--services">POST api/v1/wizard/{product_uuid}/services</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-wizard--product_uuid--services">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/wizard/65be9d21-9bdd-4138-a2ee-2dbc0363e5a7/services" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"attributes\": \"et\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/wizard/65be9d21-9bdd-4138-a2ee-2dbc0363e5a7/services"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "attributes": "et"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-wizard--product_uuid--services">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The attributes must be an array.&quot;,
    &quot;errors&quot;: {
        &quot;attributes&quot;: [
            &quot;The attributes must be an array.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-wizard--product_uuid--services" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-wizard--product_uuid--services"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-wizard--product_uuid--services" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-wizard--product_uuid--services" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-wizard--product_uuid--services"></code></pre>
</span>
<form id="form-POSTapi-v1-wizard--product_uuid--services" data-method="POST"
      data-path="api/v1/wizard/{product_uuid}/services"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-wizard--product_uuid--services', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-wizard--product_uuid--services"
                    onclick="tryItOut('POSTapi-v1-wizard--product_uuid--services');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-wizard--product_uuid--services"
                    onclick="cancelTryOut('POSTapi-v1-wizard--product_uuid--services');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-wizard--product_uuid--services" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/wizard/{product_uuid}/services</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-wizard--product_uuid--services"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-wizard--product_uuid--services"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_uuid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="product_uuid"                data-endpoint="POSTapi-v1-wizard--product_uuid--services"
               value="65be9d21-9bdd-4138-a2ee-2dbc0363e5a7"
               data-component="url">
    <br>
<p>Example: <code>65be9d21-9bdd-4138-a2ee-2dbc0363e5a7</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
<br>
<p>array.Attributes of the hotel Example: <code>et</code></p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>required.</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="attributes.name"                data-endpoint="POSTapi-v1-wizard--product_uuid--services"
               value="sunt"
               data-component="body">
    <br>
<p>Example: <code>sunt</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>value</code></b>&nbsp;&nbsp;
<small>required.</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="attributes.value"                data-endpoint="POSTapi-v1-wizard--product_uuid--services"
               value="ea"
               data-component="body">
    <br>
<p>Example: <code>ea</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="wizard-POSTapi-v1-wizard--product_uuid--rooms">This endpoint will create room for existing product</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-wizard--product_uuid--rooms">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/wizard/65be9d21-9bdd-4138-a2ee-2dbc0363e5a7/rooms" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"room_type\": \"cumque\",
    \"is_smoking_allowed\": \"qui\",
    \"bed_type\": \"alias\",
    \"bed_count\": \"id\",
    \"room_size\": \"est\",
    \"price\": \"incidunt\",
    \"price_for_residents\": \"occaecati\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/wizard/65be9d21-9bdd-4138-a2ee-2dbc0363e5a7/rooms"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "room_type": "cumque",
    "is_smoking_allowed": "qui",
    "bed_type": "alias",
    "bed_count": "id",
    "room_size": "est",
    "price": "incidunt",
    "price_for_residents": "occaecati"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-wizard--product_uuid--rooms">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Last step is done&quot;,
    &quot;data&quot;: {
        &quot;roomType&quot;: &quot;Suite&quot;,
        &quot;isSmokingAllowed&quot;: true,
        &quot;bedType&quot;: &quot;King size&quot;,
        &quot;bedCount&quot;: &quot;3&quot;,
        &quot;roomSize&quot;: &quot;3&quot;,
        &quot;price&quot;: &quot;75&quot;,
        &quot;priceForResidents&quot;: &quot;45&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-wizard--product_uuid--rooms" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-wizard--product_uuid--rooms"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-wizard--product_uuid--rooms" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-wizard--product_uuid--rooms" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-wizard--product_uuid--rooms"></code></pre>
</span>
<form id="form-POSTapi-v1-wizard--product_uuid--rooms" data-method="POST"
      data-path="api/v1/wizard/{product_uuid}/rooms"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-wizard--product_uuid--rooms', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-wizard--product_uuid--rooms"
                    onclick="tryItOut('POSTapi-v1-wizard--product_uuid--rooms');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-wizard--product_uuid--rooms"
                    onclick="cancelTryOut('POSTapi-v1-wizard--product_uuid--rooms');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-wizard--product_uuid--rooms" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/wizard/{product_uuid}/rooms</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-wizard--product_uuid--rooms"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-wizard--product_uuid--rooms"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>product_uuid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="product_uuid"                data-endpoint="POSTapi-v1-wizard--product_uuid--rooms"
               value="65be9d21-9bdd-4138-a2ee-2dbc0363e5a7"
               data-component="url">
    <br>
<p>Example: <code>65be9d21-9bdd-4138-a2ee-2dbc0363e5a7</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>room_type</code></b>&nbsp;&nbsp;
<small>required.</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="room_type"                data-endpoint="POSTapi-v1-wizard--product_uuid--rooms"
               value="cumque"
               data-component="body">
    <br>
<p>Example: <code>cumque</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_smoking_allowed</code></b>&nbsp;&nbsp;
<small>nullable</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="is_smoking_allowed"                data-endpoint="POSTapi-v1-wizard--product_uuid--rooms"
               value="qui"
               data-component="body">
    <br>
<p>boolean default false. Example: <code>qui</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bed_type</code></b>&nbsp;&nbsp;
<small>required.Type</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="bed_type"                data-endpoint="POSTapi-v1-wizard--product_uuid--rooms"
               value="alias"
               data-component="body">
    <br>
<p>of the bed Example: <code>alias</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>bed_count</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="bed_count"                data-endpoint="POSTapi-v1-wizard--product_uuid--rooms"
               value="id"
               data-component="body">
    <br>
<p>integer.How many beds room have Example: <code>id</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>room_size</code></b>&nbsp;&nbsp;
<small>integer.Size</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="room_size"                data-endpoint="POSTapi-v1-wizard--product_uuid--rooms"
               value="est"
               data-component="body">
    <br>
<p>of the room Example: <code>est</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>required</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="price"                data-endpoint="POSTapi-v1-wizard--product_uuid--rooms"
               value="incidunt"
               data-component="body">
    <br>
<p>float.This is price for foreigners Example: <code>incidunt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price_for_residents</code></b>&nbsp;&nbsp;
<small>float.This</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="price_for_residents"                data-endpoint="POSTapi-v1-wizard--product_uuid--rooms"
               value="occaecati"
               data-component="body">
    <br>
<p>is price for locals Example: <code>occaecati</code></p>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
