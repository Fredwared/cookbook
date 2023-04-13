<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Auth api documentation</title>

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
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-wizard-setup">
                                <a href="#endpoints-POSTapi-v1-wizard-setup">POST api/v1/wizard/setup</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-wizard--product_uuid--services">
                                <a href="#endpoints-POSTapi-v1-wizard--product_uuid--services">POST api/v1/wizard/{product_uuid}/services</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-products--product_uuid---media_id-">
                                <a href="#endpoints-PATCHapi-v1-products--product_uuid---media_id-">Update Current Preview</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-products">
                                <a href="#endpoints-GETapi-v1-products">Show collection of products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-products--uuid-">
                                <a href="#endpoints-GETapi-v1-products--uuid-">Show individual product</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-categories">
                                <a href="#endpoints-GETapi-v1-categories">Show collection of categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-categories--id-">
                                <a href="#endpoints-GETapi-v1-categories--id-">Show each individual category</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-categories--id-">
                                <a href="#endpoints-DELETEapi-v1-categories--id-">Delete existing category or it's subcategories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-reviews">
                                <a href="#endpoints-GETapi-v1-reviews">Show collection of reviews</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-reviews--id-">
                                <a href="#endpoints-GETapi-v1-reviews--id-">Show each individual category</a>
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
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-register">
                                <a href="#endpoints-POSTapi-v1-register">User Register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-verify">
                                <a href="#endpoints-POSTapi-v1-verify">Verify User</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-resend-code">
                                <a href="#endpoints-POSTapi-v1-resend-code">Resend code to the user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-login">
                                <a href="#endpoints-POSTapi-v1-login">User Login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-logout">
                                <a href="#endpoints-POSTapi-v1-logout">User Logout</a>
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
        <li>Last updated: April 13, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This is documentation for auth api </p>
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

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-v1-wizard-setup">POST api/v1/wizard/setup</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-wizard-setup">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/wizard/setup" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "category_id=ea" \
    --form "name=dolores" \
    --form "description=Quibusdam esse dolorem distinctio alias et quo vel voluptatum." \
    --form "postal_code=1476" \
    --form "location=deleniti" \
    --form "city_id=asperiores" \
    --form "country_id=quas" \
    --form "contacts[]=atque" \
    --form "rating=2" \
    --form "images[]=@C:\Users\-\AppData\Local\Temp\php4978.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/wizard/setup"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('category_id', 'ea');
body.append('name', 'dolores');
body.append('description', 'Quibusdam esse dolorem distinctio alias et quo vel voluptatum.');
body.append('postal_code', '1476');
body.append('location', 'deleniti');
body.append('city_id', 'asperiores');
body.append('country_id', 'quas');
body.append('contacts[]', 'atque');
body.append('rating', '2');
body.append('images[]', document.querySelector('input[name="images[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-wizard-setup">
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
    &quot;message&quot;: &quot;The selected category id is invalid. (and 4 more errors)&quot;,
    &quot;errors&quot;: {
        &quot;category_id&quot;: [
            &quot;The selected category id is invalid.&quot;
        ],
        &quot;city_id&quot;: [
            &quot;The selected city id is invalid.&quot;
        ],
        &quot;country_id&quot;: [
            &quot;The selected country id is invalid.&quot;
        ],
        &quot;contacts.0.name&quot;: [
            &quot;The contacts.0.name field is required.&quot;
        ],
        &quot;contacts.0.number&quot;: [
            &quot;The contacts.0.number field is required.&quot;
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
      data-hasfiles="1"
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
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
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
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="category_id"                data-endpoint="POSTapi-v1-wizard-setup"
               value="ea"
               data-component="body">
    <br>
<p>Example: <code>ea</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-v1-wizard-setup"
               value="dolores"
               data-component="body">
    <br>
<p>Example: <code>dolores</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="description"                data-endpoint="POSTapi-v1-wizard-setup"
               value="Quibusdam esse dolorem distinctio alias et quo vel voluptatum."
               data-component="body">
    <br>
<p>Example: <code>Quibusdam esse dolorem distinctio alias et quo vel voluptatum.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>images</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
               name="images[0]"                data-endpoint="POSTapi-v1-wizard-setup"
               data-component="body">
        <input type="file" style="display: none"
               name="images[1]"                data-endpoint="POSTapi-v1-wizard-setup"
               data-component="body">
    <br>
<p>Must be an image. Must not be greater than 2048 kilobytes.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>postal_code</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="postal_code"                data-endpoint="POSTapi-v1-wizard-setup"
               value="1476"
               data-component="body">
    <br>
<p>Example: <code>1476</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="location"                data-endpoint="POSTapi-v1-wizard-setup"
               value="deleniti"
               data-component="body">
    <br>
<p>Example: <code>deleniti</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="city_id"                data-endpoint="POSTapi-v1-wizard-setup"
               value="asperiores"
               data-component="body">
    <br>
<p>Example: <code>asperiores</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="country_id"                data-endpoint="POSTapi-v1-wizard-setup"
               value="quas"
               data-component="body">
    <br>
<p>Example: <code>quas</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>contacts</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="contacts.0.name"                data-endpoint="POSTapi-v1-wizard-setup"
               value="mhgxomflgngumxfukdoszi"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>mhgxomflgngumxfukdoszi</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>number</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="contacts.0.number"                data-endpoint="POSTapi-v1-wizard-setup"
               value="82"
               data-component="body">
    <br>
<p>Must match the regex /^[0-9 ]+$/. Example: <code>82</code></p>
                    </div>
                                    </details>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rating</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="rating"                data-endpoint="POSTapi-v1-wizard-setup"
               value="2"
               data-component="body">
    <br>
<p>Must not be greater than 5. Must be at least 1. Example: <code>2</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-wizard--product_uuid--services">POST api/v1/wizard/{product_uuid}/services</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-wizard--product_uuid--services">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/wizard/d944821c-2ab0-4fe4-9195-c8372f0a153b/services" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/wizard/d944821c-2ab0-4fe4-9195-c8372f0a153b/services"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-wizard--product_uuid--services">
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
x-ratelimit-remaining: 58
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
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
               value="d944821c-2ab0-4fe4-9195-c8372f0a153b"
               data-component="url">
    <br>
<p>Example: <code>d944821c-2ab0-4fe4-9195-c8372f0a153b</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PATCHapi-v1-products--product_uuid---media_id-">Update Current Preview</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-products--product_uuid---media_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/v1/products/d944821c-2ab0-4fe4-9195-c8372f0a153b/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/products/d944821c-2ab0-4fe4-9195-c8372f0a153b/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-products--product_uuid---media_id-">
</span>
<span id="execution-results-PATCHapi-v1-products--product_uuid---media_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-products--product_uuid---media_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-products--product_uuid---media_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-products--product_uuid---media_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-products--product_uuid---media_id-"></code></pre>
</span>
<form id="form-PATCHapi-v1-products--product_uuid---media_id-" data-method="PATCH"
      data-path="api/v1/products/{product_uuid}/{media_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-products--product_uuid---media_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-products--product_uuid---media_id-"
                    onclick="tryItOut('PATCHapi-v1-products--product_uuid---media_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-products--product_uuid---media_id-"
                    onclick="cancelTryOut('PATCHapi-v1-products--product_uuid---media_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-products--product_uuid---media_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/products/{product_uuid}/{media_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PATCHapi-v1-products--product_uuid---media_id-"
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
               name="Accept"                data-endpoint="PATCHapi-v1-products--product_uuid---media_id-"
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
               name="product_uuid"                data-endpoint="PATCHapi-v1-products--product_uuid---media_id-"
               value="d944821c-2ab0-4fe4-9195-c8372f0a153b"
               data-component="url">
    <br>
<p>Example: <code>d944821c-2ab0-4fe4-9195-c8372f0a153b</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>media_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="media_id"                data-endpoint="PATCHapi-v1-products--product_uuid---media_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the media. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-products">Show collection of products</h2>

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
        &quot;id&quot;: &quot;e63e569f-42dc-4939-9618-1159747906fe&quot;,
        &quot;name&quot;: &quot;Natus at molestiae natus fugiat exercitationem.&quot;,
        &quot;description&quot;: &quot;Deserunt asperiores nihil non voluptatem officia placeat dolorem sunt. Fuga ab porro nobis recusandae possimus fugit. Repellat libero optio quos temporibus velit. Laborum dolores accusamus autem dolor accusantium est ab. Explicabo deserunt et esse voluptas maiores quae veniam.&quot;,
        &quot;country&quot;: &quot;Tajikistan&quot;,
        &quot;city&quot;: &quot;stad&quot;,
        &quot;location&quot;: &quot;Perferendis adipisci maxime qui error.&quot;,
        &quot;rating&quot;: 1,
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

                    <h2 id="endpoints-GETapi-v1-products--uuid-">Show individual product</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-products--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/products/d944821c-2ab0-4fe4-9195-c8372f0a153b" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/products/d944821c-2ab0-4fe4-9195-c8372f0a153b"
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
        &quot;id&quot;: &quot;58048b93-a221-46f7-975a-3f1ff4787a14&quot;,
        &quot;name&quot;: &quot;Maiores omnis quas repudiandae.&quot;,
        &quot;description&quot;: &quot;Aut mollitia vel nostrum et similique libero qui. Debitis ex doloremque provident doloremque. In delectus optio id asperiores libero aut. Ut dolores aspernatur voluptatem ullam. Est impedit voluptas molestiae nam cumque enim dolor. Distinctio dolor laborum temporibus adipisci molestiae omnis eius est. Autem excepturi aspernatur molestiae. Eius nobis dolores recusandae doloribus quidem ut.&quot;,
        &quot;country&quot;: &quot;Kazakhstan&quot;,
        &quot;city&quot;: &quot;fort&quot;,
        &quot;location&quot;: &quot;Non repellat ut et rem voluptatem.&quot;,
        &quot;rating&quot;: 4,
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
               value="d944821c-2ab0-4fe4-9195-c8372f0a153b"
               data-component="url">
    <br>
<p>Example: <code>d944821c-2ab0-4fe4-9195-c8372f0a153b</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-categories">Show collection of categories</h2>

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
        &quot;id&quot;: 16,
        &quot;name&quot;: &quot;corrupti&quot;
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

                    <h2 id="endpoints-GETapi-v1-categories--id-">Show each individual category</h2>

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
        &quot;id&quot;: 18,
        &quot;name&quot;: &quot;et&quot;
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

                    <h2 id="endpoints-DELETEapi-v1-categories--id-">Delete existing category or it&#039;s subcategories</h2>

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
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Category deleted successfully&quot;
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
        &quot;rating&quot;: 5,
        &quot;body&quot;: &quot;In pariatur temporibus minus laborum beatae atque inventore. Perspiciatis expedita consectetur et natus aut sed assumenda. Itaque et dolor et deserunt quis. Adipisci officia beatae dicta sit ducimus iure hic. Sed ut fugiat dignissimos explicabo vitae et. Enim quod voluptas velit unde quaerat.&quot;
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
        &quot;rating&quot;: 2,
        &quot;body&quot;: &quot;Ea in voluptatem rerum doloribus. Cumque est porro eaque deleniti illo quia ut iste. Sequi impedit soluta laborum. Rerum nostrum consectetur maxime eos sint et et rerum. Quasi totam aut odio porro eaque. Et accusamus earum ad repudiandae et corporis officiis nihil. Qui quis at nihil.&quot;
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

                    <h2 id="endpoints-POSTapi-v1-register">User Register</h2>

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
    \"preferred_contact_method\": \"omnis\"
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
    "preferred_contact_method": "omnis"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-register">
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
x-ratelimit-remaining: 57
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The birthdate is not a valid date. (and 1 more error)&quot;,
    &quot;errors&quot;: {
        &quot;birthdate&quot;: [
            &quot;The birthdate is not a valid date.&quot;
        ],
        &quot;country_id&quot;: [
            &quot;The selected country id is invalid.&quot;
        ]
    }
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
               value="omnis"
               data-component="body">
    <br>
<p>method of user to contact.Default email Example: <code>omnis</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-verify">Verify User</h2>

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
    \"code\": \"autem\"
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
    "code": "autem"
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
        &quot;firstname&quot;: &quot;Cullen&quot;,
        &quot;lastname&quot;: &quot;Fay&quot;,
        &quot;country&quot;: &quot;Turkey&quot;,
        &quot;primaryNumber&quot;: &quot;13606844255&quot;,
        &quot;number&quot;: &quot;19795194884&quot;,
        &quot;email&quot;: &quot;schimmel.anna@prosacco.org&quot;
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
               value="autem"
               data-component="body">
    <br>
<p>Example: <code>autem</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-resend-code">Resend code to the user</h2>

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
            <p>Example response (422):</p>
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
    &quot;message&quot;: &quot;The selected number is invalid. (and 1 more error)&quot;,
    &quot;errors&quot;: {
        &quot;number&quot;: [
            &quot;The selected number is invalid.&quot;,
            &quot;User is verified&quot;
        ]
    }
}</code>
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

                    <h2 id="endpoints-POSTapi-v1-login">User Login</h2>

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
        &quot;firstname&quot;: &quot;Keshawn&quot;,
        &quot;lastname&quot;: &quot;Stracke&quot;
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

                    <h2 id="endpoints-POSTapi-v1-logout">User Logout</h2>

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
