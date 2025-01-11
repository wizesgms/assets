<!DOCTYPE html>
<html>

<head>
    <title>Site Error</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            padding-top: 10%;
            background: #eee;
        }

        #error-img {
            position: fixed;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
        }

        #error-img img {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            min-width: 50%;
            min-height: 50%;
        }

        #error .main-icon .uxicon {
            font-size: 72px;
            color: inherit;
        }

        #error h1 {
            margin-bottom: 20px;
        }
    </style>
    <style>
        /*! uxcore v1.0.4 (b9bace8) | built 2014-01-14, 1:51 PM PST by ldonaghe | copyright 2014 GoDaddy */
        /*! normalize.css v2.1.0 | MIT License | git.io/normalize */
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section,
        summary {
            display: block
        }

        audio,
        canvas,
        video {
            display: inline-block
        }

        audio:not([controls]) {
            display: none;
            height: 0
        }

        [hidden] {
            display: none
        }

        html {
            font-family: sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a:focus {
            outline: thin dotted
        }

        a:active,
        a:hover {
            outline: 0
        }

        h1 {
            margin: .67em 0;
            font-size: 2em
        }

        abbr[title] {
            border-bottom: 1px dotted
        }

        b,
        strong {
            font-weight: 700
        }

        dfn {
            font-style: italic
        }

        hr {
            height: 0;
            -moz-box-sizing: content-box;
            box-sizing: content-box
        }

        mark {
            color: #000;
            background: #ff0
        }

        code,
        kbd,
        pre,
        samp {
            font-family: monospace, serif;
            font-size: 1em
        }

        pre {
            white-space: pre-wrap
        }

        q {
            quotes: "\201C" "\201D" "\2018" "\2019"
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline
        }

        sup {
            top: -.5em
        }

        sub {
            bottom: -.25em
        }

        img {
            border: 0
        }

        svg:not(:root) {
            overflow: hidden
        }

        figure {
            margin: 0
        }

        fieldset {
            padding: .35em .625em .75em;
            margin: 0 2px;
            border: 1px solid silver
        }

        legend {
            padding: 0;
            border: 0
        }

        button,
        input,
        select,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: 100%
        }

        button,
        input {
            line-height: normal
        }

        button,
        select {
            text-transform: none
        }

        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            cursor: pointer;
            -webkit-appearance: button
        }

        button[disabled],
        html input[disabled] {
            cursor: default
        }

        input[type=checkbox],
        input[type=radio] {
            padding: 0;
            box-sizing: border-box
        }

        input[type=search] {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            -webkit-appearance: textfield
        }

        input[type=search]::-webkit-search-cancel-button,
        input[type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        button::-moz-focus-inner,
        input::-moz-focus-inner {
            padding: 0;
            border: 0
        }

        textarea {
            overflow: auto;
            vertical-align: top
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        *,
        :before,
        :after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            font-size: 62.5%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        body {
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-size: 14px;
            line-height: 1.428571429;
            color: #333;
            background-color: #fff
        }

        input,
        button,
        select,
        textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button,
        input,
        select[multiple],
        textarea {
            background-image: none
        }

        a {
            color: #3282e6;
            text-decoration: none
        }

        a:hover,
        a:focus {
            color: #165db5;
            text-decoration: underline
        }

        a:focus {
            outline: thin dotted #333;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        img {
            vertical-align: middle
        }

        .img-responsive {
            display: block;
            height: auto;
            max-width: 100%
        }

        .img-rounded {
            border-radius: 0
        }

        .img-thumbnail {
            display: inline-block;
            height: auto;
            max-width: 100%;
            padding: 4px;
            line-height: 1.428571429;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 0;
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out
        }

        .img-circle {
            border-radius: 50%
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #eee
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0 0 0 0);
            border: 0
        }

        p {
            margin: 0 0 10px
        }

        .lead {
            margin-bottom: 20px;
            font-size: 16.099999999999998px;
            font-weight: 200;
            line-height: 1.4
        }

        @media (min-width:768px) {
            .lead {
                font-size: 21px
            }
        }

        small {
            font-size: 85%
        }

        cite {
            font-style: normal
        }

        .text-muted {
            color: #999
        }

        .text-primary {
            color: #679b08
        }

        .text-warning {
            color: #ff8a00
        }

        .text-danger {
            color: #f00000
        }

        .text-success {
            color: #679b08
        }

        .text-info {
            color: #3182e6
        }

        .text-left {
            text-align: left
        }

        .text-right {
            text-align: right
        }

        .text-center {
            text-align: center
        }

        .font-light {
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
            line-height: 1.1;
            color: #333
        }

        h1 small,
        h2 small,
        h3 small,
        h4 small,
        h5 small,
        h6 small,
        .h1 small,
        .h2 small,
        .h3 small,
        .h4 small,
        .h5 small,
        .h6 small {
            font-weight: 400;
            line-height: 1;
            color: #999
        }

        h1,
        h2,
        h3 {
            margin-top: 20px;
            margin-bottom: 10px
        }

        h1 small,
        h2 small,
        h3 small {
            font-size: 65%
        }

        h4,
        h5,
        h6 {
            margin-top: 10px;
            margin-bottom: 10px
        }

        h4 small,
        h5 small,
        h6 small {
            font-size: 75%
        }

        h1,
        .h1 {
            font-size: 48px
        }

        h2,
        .h2 {
            font-size: 36px
        }

        h3,
        .h3 {
            font-size: 28px
        }

        h4,
        .h4 {
            font-size: 24px
        }

        h5,
        .h5 {
            font-size: 20px
        }

        h6,
        .h6 {
            font-size: 18px
        }

        .page-header {
            padding-bottom: 9px;
            margin: 40px 0 20px;
            border-bottom: 1px solid #eee
        }

        ul,
        ol {
            margin-top: 0;
            margin-bottom: 10px
        }

        ul ul,
        ol ul,
        ul ol,
        ol ol {
            margin-bottom: 0
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none
        }

        .list-inline {
            padding-left: 0;
            list-style: none
        }

        .list-inline>li {
            display: inline-block;
            padding-right: 5px;
            padding-left: 5px
        }

        dl {
            margin-bottom: 20px
        }

        dt,
        dd {
            line-height: 1.428571429
        }

        dt {
            font-weight: 700
        }

        dd {
            margin-left: 0
        }

        @media (min-width:768px) {
            .dl-horizontal dt {
                float: left;
                width: 160px;
                overflow: hidden;
                clear: left;
                text-align: right;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .dl-horizontal dd {
                margin-left: 180px
            }

            .dl-horizontal dd:before,
            .dl-horizontal dd:after {
                display: table;
                content: " "
            }

            .dl-horizontal dd:after {
                clear: both
            }

            .dl-horizontal dd:before,
            .dl-horizontal dd:after {
                display: table;
                content: " "
            }

            .dl-horizontal dd:after {
                clear: both
            }
        }

        abbr[title],
        abbr[data-original-title] {
            cursor: help;
            border-bottom: 1px dotted #999
        }

        abbr.initialism {
            font-size: 90%;
            text-transform: uppercase
        }

        blockquote {
            padding: 10px 20px;
            margin: 0 0 20px;
            border-left: 5px solid #eee
        }

        blockquote p {
            font-size: 16px;
            font-weight: 300;
            line-height: 1.25
        }

        blockquote p:last-child {
            margin-bottom: 0
        }

        blockquote small {
            display: block;
            line-height: 1.428571429;
            color: #999
        }

        blockquote small:before {
            content: '\2014 \00A0'
        }

        blockquote.pull-right {
            padding-right: 15px;
            padding-left: 0;
            border-right: 5px solid #eee;
            border-left: 0
        }

        blockquote.pull-right p,
        blockquote.pull-right small {
            text-align: right
        }

        blockquote.pull-right small:before {
            content: ''
        }

        blockquote.pull-right small:after {
            content: '\00A0 \2014'
        }

        q:before,
        q:after,
        blockquote:before,
        blockquote:after {
            content: ""
        }

        address {
            display: block;
            margin-bottom: 20px;
            font-style: normal;
            line-height: 1.428571429
        }

        code,
        pre {
            font-family: Monaco, Menlo, Consolas, "Courier New", monospace
        }

        code {
            padding: 2px 4px;
            font-size: 90%;
            color: #c7254e;
            white-space: nowrap;
            background-color: #f9f2f4;
            border-radius: 0
        }

        pre {
            display: block;
            padding: 9.5px;
            margin: 0 0 10px;
            font-size: 13px;
            line-height: 1.428571429;
            color: #333;
            word-break: break-all;
            word-wrap: break-word;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 0
        }

        pre.prettyprint {
            margin-bottom: 20px
        }

        pre code {
            padding: 0;
            font-size: inherit;
            color: inherit;
            white-space: pre-wrap;
            background-color: transparent;
            border: 0
        }

        .pre-scrollable {
            max-height: 340px;
            overflow-y: scroll
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .container:before,
        .container:after {
            display: table;
            content: " "
        }

        .container:after {
            clear: both
        }

        .container:before,
        .container:after {
            display: table;
            content: " "
        }

        .container:after {
            clear: both
        }

        .row {
            margin-right: -15px;
            margin-left: -15px
        }

        .row:before,
        .row:after {
            display: table;
            content: " "
        }

        .row:after {
            clear: both
        }

        .row:before,
        .row:after {
            display: table;
            content: " "
        }

        .row:after {
            clear: both
        }

        .col-xs-1,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        .col-xs-1,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9,
        .col-xs-10,
        .col-xs-11 {
            float: left
        }

        .col-xs-1 {
            width: 8.333333333333332%
        }

        .col-xs-2 {
            width: 16.666666666666664%
        }

        .col-xs-3 {
            width: 25%
        }

        .col-xs-4 {
            width: 33.33333333333333%
        }

        .col-xs-5 {
            width: 41.66666666666667%
        }

        .col-xs-6 {
            width: 50%
        }

        .col-xs-7 {
            width: 58.333333333333336%
        }

        .col-xs-8 {
            width: 66.66666666666666%
        }

        .col-xs-9 {
            width: 75%
        }

        .col-xs-10 {
            width: 83.33333333333334%
        }

        .col-xs-11 {
            width: 91.66666666666666%
        }

        .col-xs-12 {
            width: 100%
        }

        @media (min-width:768px) {
            .container {
                max-width: 750px
            }

            .col-sm-1,
            .col-sm-2,
            .col-sm-3,
            .col-sm-4,
            .col-sm-5,
            .col-sm-6,
            .col-sm-7,
            .col-sm-8,
            .col-sm-9,
            .col-sm-10,
            .col-sm-11 {
                float: left
            }

            .col-sm-1 {
                width: 8.333333333333332%
            }

            .col-sm-2 {
                width: 16.666666666666664%
            }

            .col-sm-3 {
                width: 25%
            }

            .col-sm-4 {
                width: 33.33333333333333%
            }

            .col-sm-5 {
                width: 41.66666666666667%
            }

            .col-sm-6 {
                width: 50%
            }

            .col-sm-7 {
                width: 58.333333333333336%
            }

            .col-sm-8 {
                width: 66.66666666666666%
            }

            .col-sm-9 {
                width: 75%
            }

            .col-sm-10 {
                width: 83.33333333333334%
            }

            .col-sm-11 {
                width: 91.66666666666666%
            }

            .col-sm-12 {
                width: 100%
            }

            .col-sm-push-1 {
                left: 8.333333333333332%
            }

            .col-sm-push-2 {
                left: 16.666666666666664%
            }

            .col-sm-push-3 {
                left: 25%
            }

            .col-sm-push-4 {
                left: 33.33333333333333%
            }

            .col-sm-push-5 {
                left: 41.66666666666667%
            }

            .col-sm-push-6 {
                left: 50%
            }

            .col-sm-push-7 {
                left: 58.333333333333336%
            }

            .col-sm-push-8 {
                left: 66.66666666666666%
            }

            .col-sm-push-9 {
                left: 75%
            }

            .col-sm-push-10 {
                left: 83.33333333333334%
            }

            .col-sm-push-11 {
                left: 91.66666666666666%
            }

            .col-sm-pull-1 {
                right: 8.333333333333332%
            }

            .col-sm-pull-2 {
                right: 16.666666666666664%
            }

            .col-sm-pull-3 {
                right: 25%
            }

            .col-sm-pull-4 {
                right: 33.33333333333333%
            }

            .col-sm-pull-5 {
                right: 41.66666666666667%
            }

            .col-sm-pull-6 {
                right: 50%
            }

            .col-sm-pull-7 {
                right: 58.333333333333336%
            }

            .col-sm-pull-8 {
                right: 66.66666666666666%
            }

            .col-sm-pull-9 {
                right: 75%
            }

            .col-sm-pull-10 {
                right: 83.33333333333334%
            }

            .col-sm-pull-11 {
                right: 91.66666666666666%
            }

            .col-sm-offset-1 {
                margin-left: 8.333333333333332%
            }

            .col-sm-offset-2 {
                margin-left: 16.666666666666664%
            }

            .col-sm-offset-3 {
                margin-left: 25%
            }

            .col-sm-offset-4 {
                margin-left: 33.33333333333333%
            }

            .col-sm-offset-5 {
                margin-left: 41.66666666666667%
            }

            .col-sm-offset-6 {
                margin-left: 50%
            }

            .col-sm-offset-7 {
                margin-left: 58.333333333333336%
            }

            .col-sm-offset-8 {
                margin-left: 66.66666666666666%
            }

            .col-sm-offset-9 {
                margin-left: 75%
            }

            .col-sm-offset-10 {
                margin-left: 83.33333333333334%
            }

            .col-sm-offset-11 {
                margin-left: 91.66666666666666%
            }
        }

        @media (min-width:992px) {
            .container {
                max-width: 970px
            }

            .col-md-1,
            .col-md-2,
            .col-md-3,
            .col-md-4,
            .col-md-5,
            .col-md-6,
            .col-md-7,
            .col-md-8,
            .col-md-9,
            .col-md-10,
            .col-md-11 {
                float: left
            }

            .col-md-1 {
                width: 8.333333333333332%
            }

            .col-md-2 {
                width: 16.666666666666664%
            }

            .col-md-3 {
                width: 25%
            }

            .col-md-4 {
                width: 33.33333333333333%
            }

            .col-md-5 {
                width: 41.66666666666667%
            }

            .col-md-6 {
                width: 50%
            }

            .col-md-7 {
                width: 58.333333333333336%
            }

            .col-md-8 {
                width: 66.66666666666666%
            }

            .col-md-9 {
                width: 75%
            }

            .col-md-10 {
                width: 83.33333333333334%
            }

            .col-md-11 {
                width: 91.66666666666666%
            }

            .col-md-12 {
                width: 100%
            }

            .col-md-push-0 {
                left: auto
            }

            .col-md-push-1 {
                left: 8.333333333333332%
            }

            .col-md-push-2 {
                left: 16.666666666666664%
            }

            .col-md-push-3 {
                left: 25%
            }

            .col-md-push-4 {
                left: 33.33333333333333%
            }

            .col-md-push-5 {
                left: 41.66666666666667%
            }

            .col-md-push-6 {
                left: 50%
            }

            .col-md-push-7 {
                left: 58.333333333333336%
            }

            .col-md-push-8 {
                left: 66.66666666666666%
            }

            .col-md-push-9 {
                left: 75%
            }

            .col-md-push-10 {
                left: 83.33333333333334%
            }

            .col-md-push-11 {
                left: 91.66666666666666%
            }

            .col-md-pull-0 {
                right: auto
            }

            .col-md-pull-1 {
                right: 8.333333333333332%
            }

            .col-md-pull-2 {
                right: 16.666666666666664%
            }

            .col-md-pull-3 {
                right: 25%
            }

            .col-md-pull-4 {
                right: 33.33333333333333%
            }

            .col-md-pull-5 {
                right: 41.66666666666667%
            }

            .col-md-pull-6 {
                right: 50%
            }

            .col-md-pull-7 {
                right: 58.333333333333336%
            }

            .col-md-pull-8 {
                right: 66.66666666666666%
            }

            .col-md-pull-9 {
                right: 75%
            }

            .col-md-pull-10 {
                right: 83.33333333333334%
            }

            .col-md-pull-11 {
                right: 91.66666666666666%
            }

            .col-md-offset-0 {
                margin-left: 0
            }

            .col-md-offset-1 {
                margin-left: 8.333333333333332%
            }

            .col-md-offset-2 {
                margin-left: 16.666666666666664%
            }

            .col-md-offset-3 {
                margin-left: 25%
            }

            .col-md-offset-4 {
                margin-left: 33.33333333333333%
            }

            .col-md-offset-5 {
                margin-left: 41.66666666666667%
            }

            .col-md-offset-6 {
                margin-left: 50%
            }

            .col-md-offset-7 {
                margin-left: 58.333333333333336%
            }

            .col-md-offset-8 {
                margin-left: 66.66666666666666%
            }

            .col-md-offset-9 {
                margin-left: 75%
            }

            .col-md-offset-10 {
                margin-left: 83.33333333333334%
            }

            .col-md-offset-11 {
                margin-left: 91.66666666666666%
            }
        }

        @media (min-width:1200px) {
            .container {
                max-width: 1170px
            }

            .col-lg-1,
            .col-lg-2,
            .col-lg-3,
            .col-lg-4,
            .col-lg-5,
            .col-lg-6,
            .col-lg-7,
            .col-lg-8,
            .col-lg-9,
            .col-lg-10,
            .col-lg-11 {
                float: left
            }

            .col-lg-1 {
                width: 8.333333333333332%
            }

            .col-lg-2 {
                width: 16.666666666666664%
            }

            .col-lg-3 {
                width: 25%
            }

            .col-lg-4 {
                width: 33.33333333333333%
            }

            .col-lg-5 {
                width: 41.66666666666667%
            }

            .col-lg-6 {
                width: 50%
            }

            .col-lg-7 {
                width: 58.333333333333336%
            }

            .col-lg-8 {
                width: 66.66666666666666%
            }

            .col-lg-9 {
                width: 75%
            }

            .col-lg-10 {
                width: 83.33333333333334%
            }

            .col-lg-11 {
                width: 91.66666666666666%
            }

            .col-lg-12 {
                width: 100%
            }

            .col-lg-push-0 {
                left: auto
            }

            .col-lg-push-1 {
                left: 8.333333333333332%
            }

            .col-lg-push-2 {
                left: 16.666666666666664%
            }

            .col-lg-push-3 {
                left: 25%
            }

            .col-lg-push-4 {
                left: 33.33333333333333%
            }

            .col-lg-push-5 {
                left: 41.66666666666667%
            }

            .col-lg-push-6 {
                left: 50%
            }

            .col-lg-push-7 {
                left: 58.333333333333336%
            }

            .col-lg-push-8 {
                left: 66.66666666666666%
            }

            .col-lg-push-9 {
                left: 75%
            }

            .col-lg-push-10 {
                left: 83.33333333333334%
            }

            .col-lg-push-11 {
                left: 91.66666666666666%
            }

            .col-lg-pull-0 {
                right: auto
            }

            .col-lg-pull-1 {
                right: 8.333333333333332%
            }

            .col-lg-pull-2 {
                right: 16.666666666666664%
            }

            .col-lg-pull-3 {
                right: 25%
            }

            .col-lg-pull-4 {
                right: 33.33333333333333%
            }

            .col-lg-pull-5 {
                right: 41.66666666666667%
            }

            .col-lg-pull-6 {
                right: 50%
            }

            .col-lg-pull-7 {
                right: 58.333333333333336%
            }

            .col-lg-pull-8 {
                right: 66.66666666666666%
            }

            .col-lg-pull-9 {
                right: 75%
            }

            .col-lg-pull-10 {
                right: 83.33333333333334%
            }

            .col-lg-pull-11 {
                right: 91.66666666666666%
            }

            .col-lg-offset-0 {
                margin-left: 0
            }

            .col-lg-offset-1 {
                margin-left: 8.333333333333332%
            }

            .col-lg-offset-2 {
                margin-left: 16.666666666666664%
            }

            .col-lg-offset-3 {
                margin-left: 25%
            }

            .col-lg-offset-4 {
                margin-left: 33.33333333333333%
            }

            .col-lg-offset-5 {
                margin-left: 41.66666666666667%
            }

            .col-lg-offset-6 {
                margin-left: 50%
            }

            .col-lg-offset-7 {
                margin-left: 58.333333333333336%
            }

            .col-lg-offset-8 {
                margin-left: 66.66666666666666%
            }

            .col-lg-offset-9 {
                margin-left: 75%
            }

            .col-lg-offset-10 {
                margin-left: 83.33333333333334%
            }

            .col-lg-offset-11 {
                margin-left: 91.66666666666666%
            }
        }

        table {
            max-width: 100%;
            background-color: transparent
        }

        th {
            text-align: left
        }

        .table {
            width: 100%;
            margin-bottom: 20px;
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-size: 12px
        }

        .table thead>tr>th,
        .table tbody>tr>th,
        .table tfoot>tr>th,
        .table thead>tr>td,
        .table tbody>tr>td,
        .table tfoot>tr>td {
            padding: 10px;
            line-height: 1.428571429;
            vertical-align: top;
            border-top: 1px solid #b3b3b3
        }

        .table thead>tr>th {
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            vertical-align: bottom;
            border-bottom: 1px solid #b3b3b3
        }

        .table caption+thead tr:first-child th,
        .table colgroup+thead tr:first-child th,
        .table thead:first-child tr:first-child th,
        .table caption+thead tr:first-child td,
        .table colgroup+thead tr:first-child td,
        .table thead:first-child tr:first-child td {
            border-top: 0
        }

        .table tbody+tbody {
            border-top: 2px solid #b3b3b3
        }

        .table .table {
            background-color: #fff
        }

        .table-condensed thead>tr>th,
        .table-condensed tbody>tr>th,
        .table-condensed tfoot>tr>th,
        .table-condensed thead>tr>td,
        .table-condensed tbody>tr>td,
        .table-condensed tfoot>tr>td {
            padding: 7px
        }

        .table-bordered {
            border: 1px solid #b3b3b3
        }

        .table-bordered>thead>tr>th,
        .table-bordered>tbody>tr>th,
        .table-bordered>tfoot>tr>th,
        .table-bordered>thead>tr>td,
        .table-bordered>tbody>tr>td,
        .table-bordered>tfoot>tr>td {
            border: 1px solid #b3b3b3
        }

        .table-bordered>thead>tr>th,
        .table-bordered>thead>tr>td {
            border-bottom-width: 1px
        }

        .table-striped>tbody>tr:nth-child(odd)>td,
        .table-striped>tbody>tr:nth-child(odd)>th {
            background-color: #eee
        }

        .table-striped>tbody .stripe>td,
        .table-striped>tbody .stripe>th {
            background-color: #eee
        }

        .table-hover>tbody>tr:hover>td,
        .table-hover>tbody>tr:hover>th {
            background-color: #fff5bf
        }

        table col[class*=col-] {
            display: table-column;
            float: none
        }

        table td[class*=col-],
        table th[class*=col-] {
            display: table-cell;
            float: none
        }

        .table>thead>tr>td.active,
        .table>tbody>tr>td.active,
        .table>tfoot>tr>td.active,
        .table>thead>tr>th.active,
        .table>tbody>tr>th.active,
        .table>tfoot>tr>th.active,
        .table>thead>tr.active>td,
        .table>tbody>tr.active>td,
        .table>tfoot>tr.active>td,
        .table>thead>tr.active>th,
        .table>tbody>tr.active>th,
        .table>tfoot>tr.active>th {
            background-color: #fff5bf
        }

        .table>thead>tr>td.success,
        .table>tbody>tr>td.success,
        .table>tfoot>tr>td.success,
        .table>thead>tr>th.success,
        .table>tbody>tr>th.success,
        .table>tfoot>tr>th.success,
        .table>thead>tr.success>td,
        .table>tbody>tr.success>td,
        .table>tfoot>tr.success>td,
        .table>thead>tr.success>th,
        .table>tbody>tr.success>th,
        .table>tfoot>tr.success>th {
            background-color: #e5f1cc;
            border-color: #e3ecb8
        }

        .table-hover>tbody>tr>td.success:hover,
        .table-hover>tbody>tr>th.success:hover,
        .table-hover>tbody>tr.success:hover>td,
        .table-hover>tbody>tr.success:hover>th {
            background-color: #dbecb8;
            border-color: #dce6a4
        }

        .table>thead>tr>td.danger,
        .table>tbody>tr>td.danger,
        .table>tfoot>tr>td.danger,
        .table>thead>tr>th.danger,
        .table>tbody>tr>th.danger,
        .table>tfoot>tr>th.danger,
        .table>thead>tr.danger>td,
        .table>tbody>tr.danger>td,
        .table>tfoot>tr.danger>td,
        .table>thead>tr.danger>th,
        .table>tbody>tr.danger>th,
        .table>tfoot>tr.danger>th {
            background-color: #ffd9d9;
            border-color: #ffcad3
        }

        .table-hover>tbody>tr>td.danger:hover,
        .table-hover>tbody>tr>th.danger:hover,
        .table-hover>tbody>tr.danger:hover>td,
        .table-hover>tbody>tr.danger:hover>th {
            background-color: #ffc0c0;
            border-color: #ffb0bd
        }

        @media (max-width:768px) {
            .table-responsive {
                width: 100%;
                margin-bottom: 15px;
                overflow-x: scroll;
                overflow-y: hidden;
                border: 1px solid #b3b3b3;
                -ms-overflow-style: -ms-autohiding-scrollbar;
                -webkit-overflow-scrolling: touch
            }

            .table-responsive>.table {
                margin-bottom: 0;
                background-color: #fff
            }

            .table-responsive>.table>thead>tr>th,
            .table-responsive>.table>tbody>tr>th,
            .table-responsive>.table>tfoot>tr>th,
            .table-responsive>.table>thead>tr>td,
            .table-responsive>.table>tbody>tr>td,
            .table-responsive>.table>tfoot>tr>td {
                white-space: nowrap
            }

            .table-responsive>.table-bordered {
                border: 0
            }

            .table-responsive>.table-bordered>thead>tr>th:first-child,
            .table-responsive>.table-bordered>tbody>tr>th:first-child,
            .table-responsive>.table-bordered>tfoot>tr>th:first-child,
            .table-responsive>.table-bordered>thead>tr>td:first-child,
            .table-responsive>.table-bordered>tbody>tr>td:first-child,
            .table-responsive>.table-bordered>tfoot>tr>td:first-child {
                border-left: 0
            }

            .table-responsive>.table-bordered>thead>tr>th:last-child,
            .table-responsive>.table-bordered>tbody>tr>th:last-child,
            .table-responsive>.table-bordered>tfoot>tr>th:last-child,
            .table-responsive>.table-bordered>thead>tr>td:last-child,
            .table-responsive>.table-bordered>tbody>tr>td:last-child,
            .table-responsive>.table-bordered>tfoot>tr>td:last-child {
                border-right: 0
            }

            .table-responsive>.table-bordered>thead>tr:last-child>th,
            .table-responsive>.table-bordered>tbody>tr:last-child>th,
            .table-responsive>.table-bordered>tfoot>tr:last-child>th,
            .table-responsive>.table-bordered>thead>tr:last-child>td,
            .table-responsive>.table-bordered>tbody>tr:last-child>td,
            .table-responsive>.table-bordered>tfoot>tr:last-child>td {
                border-bottom: 0
            }
        }

        .datagrid {
            width: 100%;
            margin-bottom: 20px;
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-size: 12px
        }

        .datagrid thead>tr>th,
        .datagrid tbody>tr>th,
        .datagrid tfoot>tr>th,
        .datagrid thead>tr>td,
        .datagrid tbody>tr>td,
        .datagrid tfoot>tr>td {
            padding: 10px;
            line-height: 1.428571429;
            vertical-align: top;
            border-top: 1px solid #b3b3b3
        }

        .datagrid thead>tr>th {
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            vertical-align: bottom;
            border-bottom: 1px solid #b3b3b3
        }

        .datagrid caption+thead tr:first-child th,
        .datagrid colgroup+thead tr:first-child th,
        .datagrid thead:first-child tr:first-child th,
        .datagrid caption+thead tr:first-child td,
        .datagrid colgroup+thead tr:first-child td,
        .datagrid thead:first-child tr:first-child td {
            border-top: 0
        }

        .datagrid tbody+tbody {
            border-top: 2px solid #b3b3b3
        }

        .datagrid .table {
            background-color: #fff
        }

        .datagrid>tbody>tr:nth-child(odd)>td,
        .datagrid>tbody>tr:nth-child(odd)>th {
            background-color: #eee
        }

        .datagrid>tbody .stripe>td,
        .datagrid>tbody .stripe>th {
            background-color: #eee
        }

        .datagrid thead>tr>th,
        .datagrid tbody>tr>th,
        .datagrid tfoot>tr>th,
        .datagrid thead>tr>td,
        .datagrid tbody>tr>td,
        .datagrid tfoot>tr>td {
            padding: 7px
        }

        .datagrid>tbody>tr:hover>td,
        .datagrid>tbody>tr:hover>th {
            background-color: #fff5bf
        }

        .datagrid thead>tr>th,
        .datagrid tbody>tr>th,
        .datagrid tfoot>tr>th,
        .datagrid thead>tr>td,
        .datagrid tbody>tr>td,
        .datagrid tfoot>tr>td {
            border-top: 1px solid #fff
        }

        fieldset {
            padding: 0;
            margin: 0;
            border: 0
        }

        legend {
            display: block;
            width: 100%;
            padding: 0;
            margin-bottom: 20px;
            font-size: 21px;
            line-height: inherit;
            color: #333;
            border: 0;
            border-bottom: 1px solid #e5e5e5
        }

        label {
            display: inline-block;
            margin-bottom: 2px
        }

        input[type=search] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-appearance: none
        }

        input[type=radio],
        input[type=checkbox] {
            margin: 4px 0 0;
            margin-top: 1px \9;
            line-height: normal
        }

        input[type=file] {
            display: block
        }

        select[multiple],
        select[size] {
            height: auto
        }

        select optgroup {
            font-family: inherit;
            font-size: inherit;
            font-style: inherit
        }

        input[type=file]:focus,
        input[type=radio]:focus,
        input[type=checkbox]:focus {
            outline: thin dotted #333;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            height: auto
        }

        output {
            display: block;
            padding-top: 8px;
            font-size: 14px;
            line-height: 1.428571429;
            color: #555;
            vertical-align: middle
        }

        .form-control:-moz-placeholder {
            color: #b3b3b3
        }

        .form-control::-moz-placeholder {
            color: #b3b3b3
        }

        .form-control:-ms-input-placeholder {
            color: #b3b3b3
        }

        .form-control::-webkit-input-placeholder {
            color: #b3b3b3
        }

        .form-control {
            display: block;
            width: 100%;
            height: 36px;
            padding: 7px 10px;
            font-size: 14px;
            line-height: 1.428571429;
            color: #555;
            vertical-align: middle;
            background-color: #fff;
            border: 1px solid #b3b3b3;
            border-radius: 0;
            -webkit-transition: border-color ease-in-out .15s;
            transition: border-color ease-in-out .15s
        }

        .form-control:hover {
            -webkit-box-shadow: inset 0 0 0 2px rgba(0, 0, 0, .08);
            box-shadow: inset 0 0 0 2px rgba(0, 0, 0, .08)
        }

        .form-control:focus {
            border-color: #555;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .form-control[disabled],
        fieldset[disabled] .form-control {
            color: #b3b3b3;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd
        }

        .form-control[disabled]:hover,
        fieldset[disabled] .form-control:hover {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .form-control[readonly] {
            color: #555;
            cursor: default
        }

        textarea.form-control {
            height: auto
        }

        .form-group {
            margin-bottom: 15px
        }

        .radio,
        .checkbox {
            display: block;
            min-height: 20px;
            padding-left: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
            vertical-align: middle
        }

        .radio label,
        .checkbox label {
            display: inline;
            margin-bottom: 0;
            font-weight: 400;
            cursor: pointer
        }

        .radio input[type=radio],
        .radio-inline input[type=radio],
        .checkbox input[type=checkbox],
        .checkbox-inline input[type=checkbox] {
            float: left;
            margin-left: -20px
        }

        .radio+.radio,
        .checkbox+.checkbox {
            margin-top: -5px
        }

        label+.checkbox,
        label+.radio {
            margin-top: 3px
        }

        .radio-inline,
        .checkbox-inline {
            display: inline-block;
            padding-left: 20px;
            margin-bottom: 0;
            font-weight: 400;
            vertical-align: middle;
            cursor: pointer
        }

        .radio-inline+.radio-inline,
        .checkbox-inline+.checkbox-inline {
            margin-top: 0;
            margin-left: 10px
        }

        input[type=radio][disabled],
        input[type=checkbox][disabled],
        .radio[disabled],
        .radio-inline[disabled],
        .checkbox[disabled],
        .checkbox-inline[disabled],
        fieldset[disabled] input[type=radio],
        fieldset[disabled] input[type=checkbox],
        fieldset[disabled] .radio,
        fieldset[disabled] .radio-inline,
        fieldset[disabled] .checkbox,
        fieldset[disabled] .checkbox-inline {
            cursor: not-allowed
        }

        fieldset[disabled] .radio label,
        fieldset[disabled] .radio-inline label,
        fieldset[disabled] .checkbox label,
        fieldset[disabled] .checkbox-inline label {
            color: #999;
            cursor: not-allowed
        }

        .input-sm {
            height: 26px;
            padding: 3px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 0
        }

        select.input-sm {
            height: 26px;
            line-height: 26px
        }

        textarea.input-sm {
            height: auto
        }

        .input-lg {
            height: 54px;
            padding: 14px 16px;
            font-size: 18px;
            line-height: 1.35;
            border-radius: 0
        }

        select.input-lg {
            height: 54px;
            line-height: 54px
        }

        textarea.input-lg {
            height: auto
        }

        .has-error .help-block,
        .has-error .control-label {
            color: #f00000
        }

        .has-error .form-control {
            border-color: #f00000
        }

        .has-error .form-control:focus {
            border-color: #bd0000
        }

        .has-error .input-group-addon {
            color: #f00000;
            background-color: #ffd9d9;
            border-color: #f00000
        }

        .has-success .help-block,
        .has-success .control-label {
            color: #679b08
        }

        .has-success .form-control {
            border-color: #679b08
        }

        .has-success .form-control:focus {
            border-color: #476b05
        }

        .has-success .input-group-addon {
            color: #679b08;
            background-color: #e5f1cc;
            border-color: #679b08
        }

        .form-error {
            font-size: 10px;
            color: #f00000
        }

        .form-control-static {
            padding-top: 8px;
            margin-bottom: 0
        }

        .help-block {
            display: block;
            margin-top: 5px;
            margin-bottom: 10px;
            color: #999
        }

        @media (min-width:768px) {
            .form-inline .form-group {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle
            }

            .form-inline .form-control {
                display: inline-block
            }

            .form-inline .radio,
            .form-inline .checkbox {
                display: inline-block;
                padding-left: 0;
                margin-top: 0;
                margin-bottom: 0
            }

            .form-inline .radio input[type=radio],
            .form-inline .checkbox input[type=checkbox] {
                float: none;
                margin-left: 0
            }
        }

        .form-horizontal .control-label,
        .form-horizontal .radio,
        .form-horizontal .checkbox,
        .form-horizontal .radio-inline,
        .form-horizontal .checkbox-inline {
            padding-top: 8px;
            margin-top: 0;
            margin-bottom: 0
        }

        .form-horizontal .form-group {
            margin-right: -15px;
            margin-left: -15px
        }

        .form-horizontal .form-group:before,
        .form-horizontal .form-group:after {
            display: table;
            content: " "
        }

        .form-horizontal .form-group:after {
            clear: both
        }

        .form-horizontal .form-group:before,
        .form-horizontal .form-group:after {
            display: table;
            content: " "
        }

        .form-horizontal .form-group:after {
            clear: both
        }

        @media (min-width:768px) {
            .form-horizontal .control-label {
                text-align: right
            }
        }

        .fieldset {
            padding: 0 15px;
            background-color: #f5f5f5;
            border: 1px solid #b3b3b3
        }

        label+.fieldset {
            margin-top: 3px
        }

        .fieldset .form-group:first-child {
            margin-top: 15px
        }

        .req {
            color: #f00000
        }

        .input-icon {
            position: relative;
            display: block
        }

        .input-icon .uxicon {
            position: absolute;
            top: 50%;
            display: block;
            width: 35px;
            margin-top: -.5em;
            font-size: 16.099999999999998px;
            color: #555;
            text-align: center
        }

        .input-icon .input-sm+.uxicon {
            width: 25px;
            font-size: 13.799999999999999px
        }

        .input-icon .input-lg+.uxicon {
            width: 45px;
            font-size: 20.7px
        }

        .input-icon-left .uxicon {
            left: 0
        }

        .input-icon-left input {
            padding-left: 35px
        }

        .input-icon-left input.input-sm {
            padding-left: 25px
        }

        .input-icon-left input.input-lg {
            padding-left: 45px
        }

        .input-icon-right .uxicon {
            right: 0
        }

        .input-icon-right input {
            padding-right: 35px
        }

        .input-icon-right input.input-sm {
            padding-right: 25px
        }

        .input-icon-right input.input-lg {
            padding-right: 45px
        }

        .btn {
            display: inline-block;
            min-width: 44px;
            padding: 12px 15px 9px;
            margin-bottom: 0;
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.428571429;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-width: 0 0 3px;
            border-radius: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none
        }

        @media (min-width:480px) {
            .btn {
                min-width: 88px;
                padding: 8px 15px 5px;
                font-size: 14px;
                line-height: 1.428571429;
                border-radius: 0
            }
        }

        .btn:focus {
            outline: thin dotted #333;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        .btn:hover,
        .btn:focus {
            text-decoration: none
        }

        .btn:active,
        .btn.active {
            background-image: none;
            outline: 0
        }

        .btn.disabled,
        .btn[disabled],
        fieldset[disabled] .btn {
            pointer-events: none;
            cursor: not-allowed;
            opacity: .25;
            filter: alpha(opacity=25);
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .btn-default {
            color: #fff;
            background-color: #8b8b8b;
            border-color: #7e7e7e
        }

        .btn-default:hover {
            color: #fff;
            background-color: #939393;
            border-color: #868686
        }

        .btn-default:focus,
        .btn-default:active,
        .btn-default.active,
        .open .dropdown-toggle.btn-default {
            color: #fff;
            background-color: #7e7e7e;
            border-color: #7e7e7e
        }

        .btn-default:active,
        .btn-default.active,
        .open .dropdown-toggle.btn-default {
            background-image: none
        }

        .btn-default.disabled,
        .btn-default[disabled],
        fieldset[disabled] .btn-default,
        .btn-default.disabled:hover,
        .btn-default[disabled]:hover,
        fieldset[disabled] .btn-default:hover,
        .btn-default.disabled:focus,
        .btn-default[disabled]:focus,
        fieldset[disabled] .btn-default:focus,
        .btn-default.disabled:active,
        .btn-default[disabled]:active,
        fieldset[disabled] .btn-default:active,
        .btn-default.disabled.active,
        .btn-default[disabled].active,
        fieldset[disabled] .btn-default.active {
            background-color: #8b8b8b;
            border-color: #8b8b8b
        }

        .btn-primary {
            color: #fff;
            background-color: #679b08;
            border-color: #578307
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #71aa09;
            border-color: #619107
        }

        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active,
        .open .dropdown-toggle.btn-primary {
            color: #fff;
            background-color: #578307;
            border-color: #578307
        }

        .btn-primary:active,
        .btn-primary.active,
        .open .dropdown-toggle.btn-primary {
            background-image: none
        }

        .btn-primary.disabled,
        .btn-primary[disabled],
        fieldset[disabled] .btn-primary,
        .btn-primary.disabled:hover,
        .btn-primary[disabled]:hover,
        fieldset[disabled] .btn-primary:hover,
        .btn-primary.disabled:focus,
        .btn-primary[disabled]:focus,
        fieldset[disabled] .btn-primary:focus,
        .btn-primary.disabled:active,
        .btn-primary[disabled]:active,
        fieldset[disabled] .btn-primary:active,
        .btn-primary.disabled.active,
        .btn-primary[disabled].active,
        fieldset[disabled] .btn-primary.active {
            background-color: #679b08;
            border-color: #679b08
        }

        .btn-warning {
            color: #fff;
            background-color: #ff8a00;
            border-color: #e67c00
        }

        .btn-warning:hover {
            color: #fff;
            background-color: #ff910f;
            border-color: #f58400
        }

        .btn-warning:focus,
        .btn-warning:active,
        .btn-warning.active,
        .open .dropdown-toggle.btn-warning {
            color: #fff;
            background-color: #e67c00;
            border-color: #e67c00
        }

        .btn-warning:active,
        .btn-warning.active,
        .open .dropdown-toggle.btn-warning {
            background-image: none
        }

        .btn-warning.disabled,
        .btn-warning[disabled],
        fieldset[disabled] .btn-warning,
        .btn-warning.disabled:hover,
        .btn-warning[disabled]:hover,
        fieldset[disabled] .btn-warning:hover,
        .btn-warning.disabled:focus,
        .btn-warning[disabled]:focus,
        fieldset[disabled] .btn-warning:focus,
        .btn-warning.disabled:active,
        .btn-warning[disabled]:active,
        fieldset[disabled] .btn-warning:active,
        .btn-warning.disabled.active,
        .btn-warning[disabled].active,
        fieldset[disabled] .btn-warning.active {
            background-color: #ff8a00;
            border-color: #ff8a00
        }

        .btn-danger {
            color: #fff;
            background-color: #f00000;
            border-color: #d70000
        }

        .btn-danger:hover {
            color: #fff;
            background-color: red;
            border-color: #e60000
        }

        .btn-danger:focus,
        .btn-danger:active,
        .btn-danger.active,
        .open .dropdown-toggle.btn-danger {
            color: #fff;
            background-color: #d70000;
            border-color: #d70000
        }

        .btn-danger:active,
        .btn-danger.active,
        .open .dropdown-toggle.btn-danger {
            background-image: none
        }

        .btn-danger.disabled,
        .btn-danger[disabled],
        fieldset[disabled] .btn-danger,
        .btn-danger.disabled:hover,
        .btn-danger[disabled]:hover,
        fieldset[disabled] .btn-danger:hover,
        .btn-danger.disabled:focus,
        .btn-danger[disabled]:focus,
        fieldset[disabled] .btn-danger:focus,
        .btn-danger.disabled:active,
        .btn-danger[disabled]:active,
        fieldset[disabled] .btn-danger:active,
        .btn-danger.disabled.active,
        .btn-danger[disabled].active,
        fieldset[disabled] .btn-danger.active {
            background-color: #f00000;
            border-color: #f00000
        }

        .btn-success {
            color: #fff;
            background-color: #679b08;
            border-color: #578307
        }

        .btn-success:hover {
            color: #fff;
            background-color: #71aa09;
            border-color: #619107
        }

        .btn-success:focus,
        .btn-success:active,
        .btn-success.active,
        .open .dropdown-toggle.btn-success {
            color: #fff;
            background-color: #578307;
            border-color: #578307
        }

        .btn-success:active,
        .btn-success.active,
        .open .dropdown-toggle.btn-success {
            background-image: none
        }

        .btn-success.disabled,
        .btn-success[disabled],
        fieldset[disabled] .btn-success,
        .btn-success.disabled:hover,
        .btn-success[disabled]:hover,
        fieldset[disabled] .btn-success:hover,
        .btn-success.disabled:focus,
        .btn-success[disabled]:focus,
        fieldset[disabled] .btn-success:focus,
        .btn-success.disabled:active,
        .btn-success[disabled]:active,
        fieldset[disabled] .btn-success:active,
        .btn-success.disabled.active,
        .btn-success[disabled].active,
        fieldset[disabled] .btn-success.active {
            background-color: #679b08;
            border-color: #679b08
        }

        .btn-info {
            color: #fff;
            background-color: #3182e6;
            border-color: #1b74e2
        }

        .btn-info:hover {
            color: #fff;
            background-color: #3f8ae8;
            border-color: #287ce5
        }

        .btn-info:focus,
        .btn-info:active,
        .btn-info.active,
        .open .dropdown-toggle.btn-info {
            color: #fff;
            background-color: #1b74e2;
            border-color: #1b74e2
        }

        .btn-info:active,
        .btn-info.active,
        .open .dropdown-toggle.btn-info {
            background-image: none
        }

        .btn-info.disabled,
        .btn-info[disabled],
        fieldset[disabled] .btn-info,
        .btn-info.disabled:hover,
        .btn-info[disabled]:hover,
        fieldset[disabled] .btn-info:hover,
        .btn-info.disabled:focus,
        .btn-info[disabled]:focus,
        fieldset[disabled] .btn-info:focus,
        .btn-info.disabled:active,
        .btn-info[disabled]:active,
        fieldset[disabled] .btn-info:active,
        .btn-info.disabled.active,
        .btn-info[disabled].active,
        fieldset[disabled] .btn-info.active {
            background-color: #3182e6;
            border-color: #3182e6
        }

        .btn-link {
            min-width: 0 !important;
            padding-right: 0 !important;
            padding-left: 0 !important;
            font-weight: 400;
            color: #555;
            cursor: pointer;
            border-radius: 0
        }

        .btn-link,
        .btn-link:active,
        .btn-link[disabled],
        fieldset[disabled] .btn-link {
            background-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .btn-link,
        .btn-link:hover,
        .btn-link:focus,
        .btn-link:active {
            border-color: transparent
        }

        .btn-link:hover,
        .btn-link:focus {
            color: #555;
            background-color: transparent
        }

        .btn-link[disabled]:hover,
        fieldset[disabled] .btn-link:hover,
        .btn-link[disabled]:focus,
        fieldset[disabled] .btn-link:focus {
            color: #999;
            text-decoration: none
        }

        .btn-lg {
            min-width: 140px;
            padding: 15px 15px 12px;
            font-size: 18px;
            line-height: 1.35;
            border-radius: 0
        }

        .btn-sm,
        .btn-xs {
            padding: 8px 15px 5px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 0
        }

        @media (min-width:480px) {

            .btn-sm,
            .btn-xs {
                padding: 4px 15px 1px;
                font-size: 12px;
                line-height: 1.5;
                border-radius: 0
            }
        }

        .btn-xs {
            padding-right: 5px;
            padding-left: 5px
        }

        .btn-block {
            display: block;
            width: 100%;
            padding-right: 0;
            padding-left: 0
        }

        .btn-block+.btn-block {
            margin-top: 5px
        }

        input[type=submit].btn-block,
        input[type=reset].btn-block,
        input[type=button].btn-block {
            width: 100%
        }

        .fade {
            opacity: 0;
            -webkit-transition: opacity .15s linear;
            transition: opacity .15s linear
        }

        .fade.in {
            opacity: 1
        }

        .collapse {
            display: none
        }

        .collapse.in {
            display: block
        }

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            -webkit-transition: height .35s ease;
            transition: height .35s ease
        }

        @font-face {
            font-family: uxfont;
            src: url(../fonts/uxfont.eot);
            src: url(../fonts/uxfont.eot?#iefix) format('embedded-opentype'), url(../fonts/uxfont.woff) format('woff'), url(../fonts/uxfont.ttf) format('truetype'), url(../fonts/uxfont.svg#uxfont) format('svg')
        }

        .uxicon {
            position: relative;
            display: inline-block;
            font-family: uxfont;
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            color: #555;
            text-transform: none;
            vertical-align: middle;
            speak: none;
            font-variant: normal
        }

        .uxicon:hover,
        .uxicon:focus {
            text-decoration: none
        }

        button .uxicon,
        a .uxicon,
        a.uxicon {
            color: #555
        }

        button .uxicon:hover,
        a .uxicon:hover,
        a.uxicon:hover,
        button .uxicon:focus,
        a .uxicon:focus,
        a.uxicon:focus {
            color: #470;
            text-decoration: none
        }

        .btn .uxicon,
        .btn .uxicon:hover,
        .btn .uxicon:focus {
            margin-top: -5px;
            margin-right: .25em;
            color: #fff
        }

        .btn.btn-link .uxicon,
        .btn.btn-link .uxicon:hover,
        .btn.btn-link .uxicon:focus {
            color: #555;
            text-decoration: none
        }

        .uxicon-plus:before {
            content: "\002b"
        }

        .uxicon-divide:before {
            content: "\f7"
        }

        .uxicon-euro:before {
            content: "\20ac"
        }

        .uxicon-cloud:before {
            content: "\2601"
        }

        .uxicon-note:before {
            content: "\e019"
        }

        .uxicon-trash:before {
            content: "\e017"
        }

        .uxicon-print:before {
            content: "\e016"
        }

        .uxicon-umbrella:before {
            content: "\e014"
        }

        .uxicon-heart-fill:before {
            content: "\e013"
        }

        .uxicon-magic:before {
            content: "\e010"
        }

        .uxicon-video:before {
            content: "\e009"
        }

        .uxicon-users:before {
            content: "\e008"
        }

        .uxicon-user-delete:before {
            content: "\e007"
        }

        .uxicon-user-add:before {
            content: "\e006"
        }

        .uxicon-user:before {
            content: "\e004"
        }

        .uxicon-leaf:before {
            content: "\e002"
        }

        .uxicon-apps:before {
            content: "\e001"
        }

        .uxicon-pencil:before {
            content: "\270f"
        }

        .uxicon-mail:before {
            content: "\2709"
        }

        .uxicon-minus:before {
            content: "\2212"
        }

        .uxicon-link-delete:before {
            content: "\e028"
        }

        .uxicon-link:before {
            content: "\e027"
        }

        .uxicon-cloud-upload:before {
            content: "\e026"
        }

        .uxicon-cloud-download:before {
            content: "\e025"
        }

        .uxicon-home:before {
            content: "\e021"
        }

        .uxicon-heart-outline:before {
            content: "\e020"
        }

        .uxicon-at:before {
            content: "\e029"
        }

        .uxicon-note-full:before {
            content: "\e018"
        }

        .uxicon-clipboard:before {
            content: "\e030"
        }

        .uxicon-wi-fi2:before {
            content: "\e033"
        }

        .uxicon-clipboard-copied:before {
            content: "\e034"
        }

        .uxicon-clipboard-edit:before {
            content: "\e035"
        }

        .uxicon-clipboard-text:before {
            content: "\e404"
        }

        .uxicon-users2:before {
            content: "\e044"
        }

        .uxicon-pie-graph:before {
            content: "\e043"
        }

        .uxicon-bar-graph:before {
            content: "\e042"
        }

        .uxicon-graph:before {
            content: "\e041"
        }

        .uxicon-currency:before {
            content: "\e040"
        }

        .uxicon-coins:before {
            content: "\e038"
        }

        .uxicon-page:before {
            content: "\e037"
        }

        .uxicon-website-send:before {
            content: "\e045"
        }

        .uxicon-nav:before {
            content: "\e048"
        }

        .uxicon-star-outline:before {
            content: "\e049"
        }

        .uxicon-star:before {
            content: "\e050"
        }

        .uxicon-pin:before {
            content: "\e051"
        }

        .uxicon-pinned:before {
            content: "\e405"
        }

        .uxicon-eye:before {
            content: "\e052"
        }

        .uxicon-eye-close:before {
            content: "\e053"
        }

        .uxicon-alarm:before {
            content: "\e054"
        }

        .uxicon-clock:before {
            content: "\e055"
        }

        .uxicon-stopwatch:before {
            content: "\e056"
        }

        .uxicon-anchor:before {
            content: "\2693"
        }

        .uxicon-clock-refresh:before {
            content: "\e057"
        }

        .uxicon-revert:before {
            content: "\e058"
        }

        .uxicon-orientation-lock:before {
            content: "\e059"
        }

        .uxicon-undo:before {
            content: "\e060"
        }

        .uxicon-redo:before {
            content: "\e061"
        }

        .uxicon-power:before {
            content: "\e064"
        }

        .uxicon-lightbulb:before {
            content: "\e065"
        }

        .uxicon-tag:before {
            content: "\e066"
        }

        .uxicon-tags:before {
            content: "\e067"
        }

        .uxicon-frame:before {
            content: "\e068"
        }

        .uxicon-ruler:before {
            content: "\e069"
        }

        .uxicon-gift:before {
            content: "\e070"
        }

        .uxicon-wi-fi:before {
            content: "\e074"
        }

        .uxicon-rotate:before {
            content: "\e075"
        }

        .uxicon-copy:before {
            content: "\e076"
        }

        .uxicon-chevron-down:before {
            content: "\e077"
        }

        .uxicon-chevron-up:before {
            content: "\e078"
        }

        .uxicon-check-brush:before {
            content: "\e079"
        }

        .uxicon-check-box:before {
            content: "\e080"
        }

        .uxicon-retweet:before {
            content: "\e081"
        }

        .uxicon-refresh:before {
            content: "\e082"
        }

        .uxicon-recycle:before {
            content: "\e083"
        }

        .uxicon-dropdown-outline:before {
            content: "\e084"
        }

        .uxicon-pin-box:before {
            content: "\e086"
        }

        .uxicon-dropdown-solid:before {
            content: "\e087"
        }

        .uxicon-album-check:before {
            content: "\e088"
        }

        .uxicon-website:before {
            content: "\e047"
        }

        .uxicon-album-contacts:before {
            content: "\e089"
        }

        .uxicon-album:before {
            content: "\e090"
        }

        .uxicon-eye-dropper:before {
            content: "\e091"
        }

        .uxicon-circle-half:before {
            content: "\e092"
        }

        .uxicon-drops:before {
            content: "\e093"
        }

        .uxicon-crop:before {
            content: "\e094"
        }

        .uxicon-shape-square:before {
            content: "\e095"
        }

        .uxicon-shape-circle:before {
            content: "\e096"
        }

        .uxicon-shape-polygon:before {
            content: "\e097"
        }

        .uxicon-line-straight:before {
            content: "\e098"
        }

        .uxicon-line-curved:before {
            content: "\e099"
        }

        .uxicon-bounding-box:before {
            content: "\e100"
        }

        .uxicon-superscript:before {
            content: "\e101"
        }

        .uxicon-italics:before {
            content: "\e102"
        }

        .uxicon-bold:before {
            content: "\e103"
        }

        .uxicon-underline:before {
            content: "\e104"
        }

        .uxicon-strike-through:before {
            content: "\e105"
        }

        .uxicon-text-tool:before {
            content: "\e277"
        }

        .uxicon-text-scale-vertically:before {
            content: "\e106"
        }

        .uxicon-text-scale-horiz:before {
            content: "\e107"
        }

        .uxicon-text-resize:before {
            content: "\e108"
        }

        .uxicon-indent-right:before {
            content: "\e109"
        }

        .uxicon-indent-left:before {
            content: "\e110"
        }

        .uxicon-align-left:before {
            content: "\e111"
        }

        .uxicon-aligne-center:before {
            content: "\e112"
        }

        .uxicon-align-right:before {
            content: "\e113"
        }

        .uxicon-align-justify:before {
            content: "\e114"
        }

        .uxicon-bullets:before {
            content: "\e115"
        }

        .uxicon-text-decrease:before {
            content: "\e116"
        }

        .uxicon-text-increase:before {
            content: "\e117"
        }

        .uxicon-tag-open:before {
            content: "\e118"
        }

        .uxicon-tag-end:before {
            content: "\e119"
        }

        .uxicon-tag-comment:before {
            content: "\e120"
        }

        .uxicon-mail-add:before {
            content: "\e125"
        }

        .uxicon-mail-clear:before {
            content: "\e126"
        }

        .uxicon-mail-delete:before {
            content: "\e127"
        }

        .uxicon-mail-flag:before {
            content: "\e128"
        }

        .uxicon-mail-lock:before {
            content: "\e129"
        }

        .uxicon-mail-asterisk:before {
            content: "\e130"
        }

        .uxicon-file:before {
            content: "\e131"
        }

        .uxicon-file-add:before {
            content: "\e132"
        }

        .uxicon-file-delete:before {
            content: "\e133"
        }

        .uxicon-file-lock:before {
            content: "\e134"
        }

        .uxicon-file-down:before {
            content: "\e135"
        }

        .uxicon-file-up:before {
            content: "\e136"
        }

        .uxicon-settings:before {
            content: "\e137"
        }

        .uxicon-settings2:before {
            content: "\e138"
        }

        .uxicon-filter:before {
            content: "\e139"
        }

        .uxicon-settings3:before {
            content: "\e140"
        }

        .uxicon-database-lock:before {
            content: "\e141"
        }

        .uxicon-db-add:before {
            content: "\e142"
        }

        .uxicon-db-delete:before {
            content: "\e143"
        }

        .uxicon-db-remove:before {
            content: "\e144"
        }

        .uxicon-folder-open:before {
            content: "\e145"
        }

        .uxicon-folder-add:before {
            content: "\e146"
        }

        .uxicon-folder-delete:before {
            content: "\e147"
        }

        .uxicon-folder-lock:before {
            content: "\e148"
        }

        .uxicon-folder-flag:before {
            content: "\e149"
        }

        .uxicon-folder-asterisk:before {
            content: "\e150"
        }

        .uxicon-edit:before {
            content: "\e151"
        }

        .uxicon-window:before {
            content: "\e152"
        }

        .uxicon-box:before {
            content: "\e153"
        }

        .uxicon-bring-forward:before {
            content: "\e154"
        }

        .uxicon-send-backward:before {
            content: "\e155"
        }

        .uxicon-grid-lg:before {
            content: "\e156"
        }

        .uxicon-grid-sm:before {
            content: "\e157"
        }

        .uxicon-bulleted-list:before {
            content: "\e158"
        }

        .uxicon-grid-horizontal:before {
            content: "\e159"
        }

        .uxicon-grid-960:before {
            content: "\e160"
        }

        .uxicon-desktop:before {
            content: "\e161"
        }

        .uxicon-laptop:before {
            content: "\e162"
        }

        .uxicon-tablet:before {
            content: "\e163"
        }

        .uxicon-mobile-phone:before {
            content: "\e164"
        }

        .uxicon-mobile-transmit:before {
            content: "\e165"
        }

        .uxicon-mobile-pair:before {
            content: "\e166"
        }

        .uxicon-mobile-delete:before {
            content: "\e167"
        }

        .uxicon-mobile-add:before {
            content: "\e168"
        }

        .uxicon-circle-outline:before {
            content: "\e169"
        }

        .uxicon-video-camera:before {
            content: "\e170"
        }

        .uxicon-step-backward:before {
            content: "\e171"
        }

        .uxicon-fast-backward:before {
            content: "\e172"
        }

        .uxicon-backward:before {
            content: "\e173"
        }

        .uxicon-play:before {
            content: "\e174"
        }

        .uxicon-pause:before {
            content: "\e175"
        }

        .uxicon-stop:before {
            content: "\e176"
        }

        .uxicon-forward:before {
            content: "\e177"
        }

        .uxicon-fast-forward:before {
            content: "\e178"
        }

        .uxicon-step-forward:before {
            content: "\e179"
        }

        .uxicon-eject:before {
            content: "\e180"
        }

        .uxicon-music:before {
            content: "\e181"
        }

        .uxicon-random:before {
            content: "\e182"
        }

        .uxicon-mute:before {
            content: "\e183"
        }

        .uxicon-volume-down:before {
            content: "\e184"
        }

        .uxicon-volume-up:before {
            content: "\e185"
        }

        .uxicon-resize:before {
            content: "\e186"
        }

        .uxicon-move:before {
            content: "\e187"
        }

        .uxicon-ellipses:before {
            content: "\e188"
        }

        .uxicon-brightness-down:before {
            content: "\e189"
        }

        .uxicon-brightness-up:before {
            content: "\e190"
        }

        .uxicon-add-fill:before {
            content: "\e191"
        }

        .uxicon-remove:before {
            content: "\e192"
        }

        .uxicon-delete-fill:before {
            content: "\e193"
        }

        .uxicon-ok:before {
            content: "\e194"
        }

        .uxicon-help:before {
            content: "\e195"
        }

        .uxicon-information:before {
            content: "\e196"
        }

        .uxicon-alert:before {
            content: "\e197"
        }

        .uxicon-delete-outline:before {
            content: "\e198"
        }

        .uxicon-check-outline:before {
            content: "\e199"
        }

        .uxicon-no:before {
            content: "\e200"
        }

        .uxicon-add-outline:before {
            content: "\e201"
        }

        .uxicon-cart:before {
            content: "\e203"
        }

        .uxicon-unlocked:before {
            content: "\e205"
        }

        .uxicon-locked:before {
            content: "\e206"
        }

        .uxicon-checkmark:before {
            content: "\e207"
        }

        .uxicon-x:before {
            content: "\e208"
        }

        .uxicon-cart-remove:before {
            content: "\e209"
        }

        .uxicon-cart-add:before {
            content: "\e210"
        }

        .uxicon-arrow-left:before {
            content: "\e211"
        }

        .uxicon-arrow-right:before {
            content: "\e212"
        }

        .uxicon-arrow-down-solid:before {
            content: "\e213"
        }

        .uxicon-arrow-up-solid:before {
            content: "\e214"
        }

        .uxicon-asterisk:before {
            content: "*"
        }

        .uxicon-signal:before {
            content: "\e323"
        }

        .uxicon-phone:before {
            content: "\e324"
        }

        .uxicon-microphone:before {
            content: "\e328"
        }

        .uxicon-rabbit:before {
            content: "\e329"
        }

        .uxicon-turtle:before {
            content: "\e331"
        }

        .uxicon-briefcase:before {
            content: "\e332"
        }

        .uxicon-thumbs-up:before {
            content: "\e333"
        }

        .uxicon-thumbs-down:before {
            content: "\e335"
        }

        .uxicon-pointer-right:before {
            content: "\e337"
        }

        .uxicon-pointer-left:before {
            content: "\e338"
        }

        .uxicon-pointer-up:before {
            content: "\e341"
        }

        .uxicon-pointer-down:before {
            content: "\e343"
        }

        .uxicon-paperclip:before {
            content: "\e344"
        }

        .uxicon-facebook-outline:before {
            content: "\e355"
        }

        .uxicon-locu:before {
            content: "\e356"
        }

        .uxicon-homefinder:before {
            content: "\e357"
        }

        .uxicon-pinterest-box:before {
            content: "\e358"
        }

        .uxicon-google-plus-box:before {
            content: "\e360"
        }

        .uxicon-yahoo-box:before {
            content: "\e364"
        }

        .uxicon-blogger-box:before {
            content: "\e365"
        }

        .uxicon-picasa-box:before {
            content: "\e366"
        }

        .uxicon-amazon-box:before {
            content: "\e371"
        }

        .uxicon-wordpress-box:before {
            content: "\e372"
        }

        .uxicon-locu-box:before {
            content: "\e373"
        }

        .uxicon-linkedin-box:before {
            content: "\e374"
        }

        .uxicon-youtube-box:before {
            content: "\e375"
        }

        .uxicon-twitter-circle:before {
            content: "\e388"
        }

        .uxicon-google-plus-circle:before {
            content: "\e389"
        }

        .uxicon-youtube-circle:before {
            content: "\e390"
        }

        .uxicon-radio-filled:before {
            content: "\e391"
        }

        .uxicon-gd-logo:before {
            content: "\e466"
        }

        .uxicon-gd-logo-text:before {
            content: "\e467"
        }

        .uxicon-bookmark:before {
            content: "\e346"
        }

        .uxicon-fire:before {
            content: "\e347"
        }

        .uxicon-sight:before {
            content: "\e350"
        }

        .uxicon-brush-pencil:before {
            content: "\e351"
        }

        .uxicon-paypal:before {
            content: "\e352"
        }

        .uxicon-yelp:before {
            content: "\e353"
        }

        .uxicon-twitter:before {
            content: "\e354"
        }

        .uxicon-facebook-box:before {
            content: "\e376"
        }

        .uxicon-twitter-box:before {
            content: "\e377"
        }

        .uxicon-instagram:before {
            content: "\e378"
        }

        .uxicon-at-box:before {
            content: "\e380"
        }

        .uxicon-apple-box:before {
            content: "\e381"
        }

        .uxicon-windows-box:before {
            content: "\e382"
        }

        .uxicon-yelp-box:before {
            content: "\e384"
        }

        .uxicon-android-box:before {
            content: "\e385"
        }

        .uxicon-facebook-circle:before {
            content: "\e387"
        }

        .uxicon-global-west:before {
            content: "\e300"
        }

        .uxicon-global-east:before {
            content: "\e302"
        }

        .uxicon-global-remove:before {
            content: "\e303"
        }

        .uxicon-global-checked:before {
            content: "\e304"
        }

        .uxicon-world:before {
            content: "\e305"
        }

        .uxicon-share:before {
            content: "\e306"
        }

        .uxicon-blog:before {
            content: "\e308"
        }

        .uxicon-blog-lines:before {
            content: "\e309"
        }

        .uxicon-drive:before {
            content: "\e313"
        }

        .uxicon-binoculars:before {
            content: "\e239"
        }

        .uxicon-compass:before {
            content: "\e240"
        }

        .uxicon-lightning:before {
            content: "\e241"
        }

        .uxicon-magnifying-glass:before {
            content: "\e236"
        }

        .uxicon-zoom-in:before {
            content: "\e237"
        }

        .uxicon-zoom-out:before {
            content: "\e238"
        }

        .uxicon-paintbrush:before {
            content: "\e235"
        }

        .uxicon-sun:before {
            content: "\e230"
        }

        .uxicon-pound:before {
            content: "\e229"
        }

        .uxicon-dollar:before {
            content: "\e228"
        }

        .uxicon-bluetooth:before {
            content: "\e226"
        }

        .uxicon-map-pin:before {
            content: "\e243"
        }

        .uxicon-comments:before {
            content: "\e245"
        }

        .uxicon-comment:before {
            content: "\e246"
        }

        .uxicon-map:before {
            content: "\e247"
        }

        .uxicon-map-pinned:before {
            content: "\e248"
        }

        .uxicon-airplane:before {
            content: "\e282"
        }

        .uxicon-tools:before {
            content: "\e281"
        }

        .uxicon-full-width:before {
            content: "\e275"
        }

        .uxicon-equal-width:before {
            content: "\e276"
        }

        .uxicon-subscript:before {
            content: "\e278"
        }

        .uxicon-clear-formatting:before {
            content: "\e279"
        }

        .uxicon-numbered-list:before {
            content: "\e280"
        }

        .uxicon-pulse:before {
            content: "\e283"
        }

        .uxicon-cut:before {
            content: "\e286"
        }

        .uxicon-server2:before {
            content: "\e287"
        }

        .uxicon-server-add:before {
            content: "\e288"
        }

        .uxicon-server-remove:before {
            content: "\e289"
        }

        .uxicon-server-delete:before {
            content: "\e290"
        }

        .uxicon-server-flag:before {
            content: "\e291"
        }

        .uxicon-server-locked:before {
            content: "\e292"
        }

        .uxicon-server-asterisk:before {
            content: "\e293"
        }

        .uxicon-sm-business:before {
            content: "\e294"
        }

        .uxicon-accelerator:before {
            content: "\e295"
        }

        .uxicon-img:before {
            content: "\e260"
        }

        .uxicon-img-settings:before {
            content: "\e261"
        }

        .uxicon-img-edit:before {
            content: "\e262"
        }

        .uxicon-img-link:before {
            content: "\e263"
        }

        .uxicon-img-resize:before {
            content: "\e265"
        }

        .uxicon-flag:before {
            content: "\e267"
        }

        .uxicon-shield:before {
            content: "\e271"
        }

        .uxicon-horizontal-menu:before {
            content: "\e273"
        }

        .uxicon-vertical-menu:before {
            content: "\e274"
        }

        .uxicon-position-ne:before {
            content: "\e253"
        }

        .uxicon-position-sw:before {
            content: "\e254"
        }

        .uxicon-position-s:before {
            content: "\e255"
        }

        .uxicon-position-se:before {
            content: "\e256"
        }

        .uxicon-position-nw:before {
            content: "\e251"
        }

        .uxicon-position-n:before {
            content: "\e252"
        }

        .uxicon-position-e:before {
            content: "\e392"
        }

        .uxicon-position-w:before {
            content: "\e393"
        }

        .uxicon-delivery:before {
            content: "\e349"
        }

        .uxicon-package:before {
            content: "\e348"
        }

        .uxicon-camera:before {
            content: "\e345"
        }

        .uxicon-social:before {
            content: "\e310"
        }

        .uxicon-forward-2:before {
            content: "\e222"
        }

        .uxicon-reply-all:before {
            content: "\e223"
        }

        .uxicon-chevron-right:before {
            content: "\e224"
        }

        .uxicon-chevron-left:before {
            content: "\e225"
        }

        .uxicon-moon:before {
            content: "\e231"
        }

        .uxicon-chevron-right-lt:before {
            content: "\e367"
        }

        .uxicon-chevron-left-lt:before {
            content: "\e368"
        }

        .uxicon-chevron-dbl-right-lt:before {
            content: "\e399"
        }

        .uxicon-chevron-dbl-left-lt:before {
            position: relative;
            left: -.3em;
            letter-spacing: -.6em;
            content: "\e368\e368"
        }

        .uxicon-chevron-down-lt:before {
            content: "\e369"
        }

        .uxicon-chevron-up-lt:before {
            content: "\e370"
        }

        .uxicon-backspace:before {
            content: "\e257"
        }

        .uxicon-qr-code:before {
            content: "\e258"
        }

        .uxicon-barcode:before {
            content: "\e259"
        }

        .uxicon-download:before {
            content: "\e266"
        }

        .uxicon-add-to-page:before {
            content: "\e325"
        }

        .uxicon-remove-from-page:before {
            content: "\e326"
        }

        .uxicon-save:before {
            content: "\e318"
        }

        .uxicon-resize-sm:before {
            content: "\e215"
        }

        .uxicon-resize-lg:before {
            content: "\e216"
        }

        .uxicon-chevron-sign-left:before {
            content: "\e217"
        }

        .uxicon-chevron-sign-right:before {
            content: "\e218"
        }

        .uxicon-chevron-sign-up:before {
            content: "\e219"
        }

        .uxicon-chevron-sign-down:before {
            content: "\e220"
        }

        .uxicon-reply:before {
            content: "\e221"
        }

        .uxicon-location:before {
            content: "\e234"
        }

        .uxicon-table:before {
            content: "\e284"
        }

        .uxicon-table-drop:before {
            content: "\e285"
        }

        .uxicon-calendar:before {
            content: "\e296"
        }

        .uxicon-calendar-date:before {
            content: "\e297"
        }

        .uxicon-exchange:before {
            content: "\e327"
        }

        .uxicon-credit-card:before {
            content: "\e268"
        }

        .uxicon-mail-open:before {
            content: "\e121"
        }

        .uxicon-mail-open2:before {
            content: "\e122"
        }

        .uxicon-mail-add-2:before {
            content: "\e123"
        }

        .uxicon-mail-remove:before {
            content: "\e124"
        }

        .uxicon-grab-vert:before {
            content: "\e269"
        }

        .uxicon-grab-sq:before {
            content: "\e270"
        }

        .uxicon-saved:before {
            content: "\e319"
        }

        .uxicon-save-delete:before {
            content: "\e320"
        }

        .uxicon-save-pull:before {
            content: "\e321"
        }

        .uxicon-save-open:before {
            content: "\e322"
        }

        .uxicon-disc-save:before {
            content: "\e314"
        }

        .uxicon-disc-saved:before {
            content: "\e315"
        }

        .uxicon-disc-delete:before {
            content: "\e317"
        }

        .uxicon-img-gallery:before {
            content: "\e394"
        }

        .uxicon-img-slider:before {
            content: "\e395"
        }

        .uxicon-create-btn:before {
            content: "\e396"
        }

        .uxicon-create-nav:before {
            content: "\e397"
        }

        .uxicon-create-form:before {
            content: "\e398"
        }

        .uxicon-create-line:before {
            content: "\e403"
        }

        .uxicon-stop-delete:before {
            content: "\e400"
        }

        .uxicon-add-page:before {
            content: "\e401"
        }

        .uxicon-text-highlight:before {
            content: "\e402"
        }

        .uxicon-widen:before {
            content: "\e406"
        }

        .uxicon-narrow:before {
            content: "\e407"
        }

        .uxicon-edit-outline:before {
            content: "\e408"
        }

        .uxicon-remove-outline:before {
            content: "\e409"
        }

        .uxicon-gd-logo-outline:before {
            content: "\e468"
        }

        .uxicon-serve:before {
            content: "\e062"
        }

        .caret {
            font-family: uxfont;
            line-height: 1
        }

        .caret:before {
            content: "\e369"
        }

        .dropdown {
            position: relative
        }

        .dropdown-toggle:focus {
            outline: 0
        }

        .btn.dropdown-split {
            min-width: 0;
            padding-right: 10px
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 10000000;
            display: none;
            float: left;
            min-width: 160px;
            padding: 0;
            margin: 0;
            font-size: 14px;
            list-style: none;
            background-color: #fff;
            border: 1px solid #b3b3b3;
            border-radius: 0;
            background-clip: padding-box
        }

        .dropdown-menu.pull-right {
            right: 0;
            left: auto
        }

        .dropdown-menu .divider {
            height: 1px;
            overflow: hidden;
            background-color: #b3b3b3
        }

        .dropdown-menu>li>a {
            display: block;
            padding: 10px;
            clear: both;
            font-weight: 400;
            line-height: 1.428571429;
            color: #333;
            white-space: nowrap
        }

        .dropdown-menu .dropdown-columns,
        .dropdown-menu .dropdown-columns ul {
            padding: 0;
            margin: 0;
            list-style: none
        }

        .dropdown-menu .dropdown-columns {
            display: table
        }

        .dropdown-menu .dropdown-columns>li {
            display: table-cell;
            padding: 5px
        }

        .dropdown-menu .dropdown-columns a {
            display: block;
            padding: 10px;
            clear: both;
            font-weight: 400;
            line-height: 1.428571429;
            color: #333;
            white-space: nowrap
        }

        .dropdown-menu .dropdown-columns a:hover,
        .dropdown-menu .dropdown-columns a:focus {
            color: #333;
            text-decoration: none;
            background-color: #eee
        }

        .dropdown-menu .dropdown-columns>li>ul>li>a {
            font-weight: 700
        }

        .dropdown-menu>li>a:hover,
        .dropdown-menu>li>a:focus {
            color: #333;
            text-decoration: none;
            background-color: #eee
        }

        .dropdown-menu>.sf-autocomplete-inplay>a {
            color: #333;
            text-decoration: none;
            background-color: #eee
        }

        .dropdown-menu>.active>a,
        .dropdown-menu>.active>a:hover,
        .dropdown-menu>.active>a:focus {
            color: #fff;
            text-decoration: none;
            background-color: #578307;
            outline: 0
        }

        .dropdown-menu>.disabled>a,
        .dropdown-menu>.disabled>a:hover,
        .dropdown-menu>.disabled>a:focus {
            color: #999
        }

        .dropdown-menu>.disabled>a:hover,
        .dropdown-menu>.disabled>a:focus {
            text-decoration: none;
            cursor: not-allowed;
            background-color: transparent;
            background-image: none;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false)
        }

        .open>.dropdown-menu {
            display: block
        }

        .open>a {
            outline: 0
        }

        .dropdown-header {
            display: block;
            padding: 10px;
            font-size: 12px;
            line-height: 1.428571429;
            color: #679b08
        }

        .dropdown-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 9999990
        }

        .pull-right>.dropdown-menu {
            right: 0;
            left: auto
        }

        .dropup .caret:before,
        .navbar-fixed-bottom .dropdown .caret:before {
            content: "\e370"
        }

        .dropup .dropdown-menu,
        .navbar-fixed-bottom .dropdown .dropdown-menu {
            top: auto;
            bottom: 100%
        }

        @media (min-width:768px) {
            .navbar-right .dropdown-menu {
                right: 0;
                left: auto
            }
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: inline-block;
            vertical-align: middle
        }

        .btn-group>.btn,
        .btn-group-vertical>.btn {
            position: relative;
            float: left
        }

        .btn-group>.btn:hover,
        .btn-group-vertical>.btn:hover,
        .btn-group>.btn:focus,
        .btn-group-vertical>.btn:focus,
        .btn-group>.btn:active,
        .btn-group-vertical>.btn:active,
        .btn-group>.btn.active,
        .btn-group-vertical>.btn.active {
            z-index: 2
        }

        .btn-group>.btn:focus,
        .btn-group-vertical>.btn:focus {
            outline: 0
        }

        :root .btn-group:not(.btn-group-justified)>.btn {
            display: table \9
        }

        .btn-group .btn+.btn,
        .btn-group .btn+.btn-group,
        .btn-group .btn-group+.btn,
        .btn-group .btn-group+.btn-group {
            margin-left: -1px
        }

        .btn-toolbar:before,
        .btn-toolbar:after {
            display: table;
            content: " "
        }

        .btn-toolbar:after {
            clear: both
        }

        .btn-toolbar:before,
        .btn-toolbar:after {
            display: table;
            content: " "
        }

        .btn-toolbar:after {
            clear: both
        }

        .btn-toolbar .btn-group {
            float: left
        }

        .btn-toolbar>.btn+.btn,
        .btn-toolbar>.btn-group+.btn,
        .btn-toolbar>.btn+.btn-group,
        .btn-toolbar>.btn-group+.btn-group {
            margin-left: 5px
        }

        .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
            border-radius: 0
        }

        .btn-group>.btn:first-child {
            margin-left: 0
        }

        .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group>.btn:last-child:not(:first-child),
        .btn-group>.dropdown-toggle:not(:first-child) {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .btn-group>.btn-group {
            float: left
        }

        .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
            border-radius: 0
        }

        .btn-group>.btn-group:first-child>.btn:last-child,
        .btn-group>.btn-group:first-child>.dropdown-toggle {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group>.btn-group:last-child>.btn:first-child {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .btn-group .dropdown-toggle:active,
        .btn-group.open .dropdown-toggle {
            outline: 0
        }

        .btn-group-xs>.btn {
            padding: 8px 15px 5px;
            padding-right: 5px;
            padding-left: 5px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 0
        }

        @media (min-width:480px) {
            .btn-group-xs>.btn {
                padding: 4px 15px 1px;
                font-size: 12px;
                line-height: 1.5;
                border-radius: 0
            }
        }

        .btn-group-sm>.btn {
            padding: 8px 15px 5px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 0
        }

        @media (min-width:480px) {
            .btn-group-sm>.btn {
                padding: 4px 15px 1px;
                font-size: 12px;
                line-height: 1.5;
                border-radius: 0
            }
        }

        .btn-group-lg>.btn {
            min-width: 140px;
            padding: 15px 15px 12px;
            font-size: 18px;
            line-height: 1.35;
            border-radius: 0
        }

        .btn-group>.btn+.dropdown-toggle,
        .input-group-btn>.btn+.dropdown-toggle {
            min-width: 0
        }

        .btn-group>.btn+.dropdown-toggle .caret,
        .input-group-btn>.btn+.dropdown-toggle .caret {
            margin-left: 0
        }

        .btn-group>.btn-lg+.dropdown-toggle {
            padding-right: 12px;
            padding-left: 12px
        }

        .btn .caret {
            margin-left: 10px
        }

        .btn-lg .caret {
            border-width: 5px 5px 0;
            border-bottom-width: 0
        }

        .dropup .btn-lg .caret {
            border-width: 0 5px 5px
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group {
            display: block;
            float: none;
            width: 100%;
            max-width: 100%
        }

        .btn-group-vertical>.btn-group:before,
        .btn-group-vertical>.btn-group:after {
            display: table;
            content: " "
        }

        .btn-group-vertical>.btn-group:after {
            clear: both
        }

        .btn-group-vertical>.btn-group:before,
        .btn-group-vertical>.btn-group:after {
            display: table;
            content: " "
        }

        .btn-group-vertical>.btn-group:after {
            clear: both
        }

        .btn-group-vertical>.btn-group>.btn {
            float: none
        }

        .btn-group-vertical>.btn+.btn,
        .btn-group-vertical>.btn+.btn-group,
        .btn-group-vertical>.btn-group+.btn,
        .btn-group-vertical>.btn-group+.btn-group {
            margin-top: -1px;
            margin-left: 0
        }

        .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
            border-radius: 0
        }

        .btn-group-vertical>.btn:first-child:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical>.btn:last-child:not(:first-child) {
            border-top-right-radius: 0;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
            border-radius: 0
        }

        .btn-group-vertical>.btn-group:first-child>.btn:last-child,
        .btn-group-vertical>.btn-group:first-child>.dropdown-toggle {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical>.btn-group:last-child>.btn:first-child {
            border-top-right-radius: 0;
            border-top-left-radius: 0
        }

        .btn-group-justified {
            display: table;
            width: 100%;
            border-collapse: separate;
            table-layout: fixed
        }

        .btn-group-justified .btn {
            display: table-cell;
            float: none;
            width: 1%
        }

        [data-toggle=buttons]>.btn>input[type=radio],
        [data-toggle=buttons]>.btn>input[type=checkbox] {
            display: none
        }

        .input-group {
            position: relative;
            display: table;
            border-collapse: separate
        }

        .input-group.col {
            float: none;
            padding-right: 0;
            padding-left: 0
        }

        .input-group .form-control {
            width: 100%;
            margin-bottom: 0
        }

        .input-group-lg>.form-control,
        .input-group-lg>.input-group-addon,
        .input-group-lg>.input-group-btn>.btn {
            height: 54px;
            padding: 14px 16px;
            font-size: 18px;
            line-height: 1.35;
            border-radius: 0
        }

        select.input-group-lg>.form-control,
        select.input-group-lg>.input-group-addon,
        select.input-group-lg>.input-group-btn>.btn {
            height: 54px;
            line-height: 54px
        }

        textarea.input-group-lg>.form-control,
        textarea.input-group-lg>.input-group-addon,
        textarea.input-group-lg>.input-group-btn>.btn {
            height: auto
        }

        .input-group-sm>.form-control,
        .input-group-sm>.input-group-addon,
        .input-group-sm>.input-group-btn>.btn {
            height: 26px;
            padding: 3px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 0
        }

        select.input-group-sm>.form-control,
        select.input-group-sm>.input-group-addon,
        select.input-group-sm>.input-group-btn>.btn {
            height: 26px;
            line-height: 26px
        }

        textarea.input-group-sm>.form-control,
        textarea.input-group-sm>.input-group-addon,
        textarea.input-group-sm>.input-group-btn>.btn {
            height: auto
        }

        .input-group-addon,
        .input-group-btn,
        .input-group .form-control {
            display: table-cell
        }

        .input-group-addon:not(:first-child):not(:last-child),
        .input-group-btn:not(:first-child):not(:last-child),
        .input-group .form-control:not(:first-child):not(:last-child) {
            border-radius: 0
        }

        .input-group-addon,
        .input-group-btn {
            width: 1%;
            white-space: nowrap;
            vertical-align: middle
        }

        .input-group-addon {
            padding: 7px 10px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1;
            text-align: center;
            background-color: #eee;
            border: 1px solid #b3b3b3;
            border-radius: 0
        }

        .input-group-addon.input-sm {
            padding: 3px 10px;
            font-size: 12px;
            border-radius: 0
        }

        .input-group-addon.input-lg {
            padding: 14px 16px;
            font-size: 18px;
            border-radius: 0
        }

        .input-group-addon input[type=radio],
        .input-group-addon input[type=checkbox] {
            margin-top: 0
        }

        .input-group .form-control:first-child,
        .input-group-addon:first-child,
        .input-group-btn:first-child>.btn,
        .input-group-btn:first-child>.dropdown-toggle,
        .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group-addon:first-child {
            border-right: 0
        }

        .input-group .form-control:last-child,
        .input-group-addon:last-child,
        .input-group-btn:last-child>.btn,
        .input-group-btn:last-child>.dropdown-toggle,
        .input-group-btn:first-child>.btn:not(:first-child) {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .input-group-addon:last-child {
            border-left: 0
        }

        .input-group-btn {
            position: relative;
            white-space: nowrap
        }

        .input-group-btn>.btn {
            position: relative
        }

        .input-group-btn>.btn+.btn {
            margin-left: -4px
        }

        .input-group-btn>.btn:hover,
        .input-group-btn>.btn:active {
            z-index: 2
        }

        .nav {
            padding-left: 0;
            margin-bottom: 0;
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 400;
            list-style: none
        }

        .nav:before,
        .nav:after {
            display: table;
            content: " "
        }

        .nav:after {
            clear: both
        }

        .nav:before,
        .nav:after {
            display: table;
            content: " "
        }

        .nav:after {
            clear: both
        }

        .nav>li {
            position: relative;
            display: block
        }

        .nav>li>a {
            position: relative;
            display: block;
            padding: 8px 15px;
            color: #333
        }

        .nav>li>a:hover,
        .nav>li>a:focus {
            text-decoration: none;
            background-color: #eee
        }

        .nav>li.disabled>a {
            color: #999
        }

        .nav>li.disabled>a:hover,
        .nav>li.disabled>a:focus {
            color: #999;
            text-decoration: none;
            cursor: not-allowed;
            background-color: transparent
        }

        .nav .open>a,
        .nav .open>a:hover,
        .nav .open>a:focus {
            background-color: #eee;
            border-color: #b3b3b3
        }

        .nav .nav-divider {
            height: 1px;
            overflow: hidden;
            background-color: #e5e5e5
        }

        .nav>li>a>img {
            max-width: none
        }

        .nav-tabs {
            margin-bottom: 15px;
            border-bottom: 1px solid #b3b3b3
        }

        .nav-tabs>li {
            float: left;
            margin-bottom: -1px
        }

        .nav-tabs>li>a {
            margin-left: 5px;
            line-height: 1.428571429;
            text-decoration: none;
            border: 1px solid transparent;
            border-radius: 0
        }

        .nav-tabs>li>a:focus,
        .nav-tabs>li>a:hover {
            color: #333;
            border-color: #d2d2d2 #d2d2d2 #b3b3b3
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:hover,
        .nav-tabs>li.active>a:focus {
            color: #555;
            cursor: default;
            background-color: #fff;
            border: 1px solid #b3b3b3;
            border-bottom-color: transparent
        }

        .nav-tabs>li:first-child>a {
            margin-left: 0
        }

        .nav-tabs.nav-justified {
            width: 100%;
            border-bottom: 0
        }

        .nav-tabs.nav-justified>li {
            float: none
        }

        .nav-tabs.nav-justified>li>a {
            text-align: center
        }

        @media (min-width:768px) {
            .nav-tabs.nav-justified>li {
                display: table-cell;
                width: 1%
            }
        }

        .nav-tabs.nav-justified>li>a {
            margin-right: 0;
            border-bottom: 1px solid #b3b3b3
        }

        .nav-tabs.nav-justified>.active>a {
            border-bottom-color: #fff
        }

        .nav-pills>li {
            float: left
        }

        .nav-pills>li+li {
            margin-left: 2px
        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:hover,
        .nav-pills>li.active>a:focus {
            color: #fff;
            background-color: #679b08
        }

        .nav-stacked>li {
            float: none
        }

        .nav-stacked>li+li {
            margin-top: 2px;
            margin-left: 0
        }

        .nav-justified {
            width: 100%
        }

        .nav-justified>li {
            float: none
        }

        .nav-justified>li>a {
            text-align: center
        }

        @media (min-width:768px) {
            .nav-justified>li {
                display: table-cell;
                width: 1%
            }
        }

        .nav-tabs-justified {
            border-bottom: 0
        }

        .nav-tabs-justified>li>a {
            margin-right: 0;
            border-bottom: 1px solid #b3b3b3
        }

        .nav-tabs-justified>.active>a {
            border-bottom-color: #fff
        }

        .nav-tabs.nav-justified:after {
            display: block;
            height: 1px;
            margin-top: -1px;
            overflow: hidden;
            background-color: #b3b3b3;
            content: ""
        }

        .tabbable:before,
        .tabbable:after {
            display: table;
            content: " "
        }

        .tabbable:after {
            clear: both
        }

        .tabbable:before,
        .tabbable:after {
            display: table;
            content: " "
        }

        .tabbable:after {
            clear: both
        }

        .tab-content>.tab-pane,
        .pill-content>.pill-pane {
            display: none
        }

        .tab-content>.active,
        .pill-content>.active {
            display: block
        }

        .nav .caret {
            border-top-color: #333;
            border-bottom-color: #333
        }

        .nav a:hover .caret {
            border-top-color: #333;
            border-bottom-color: #333
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            margin-left: 5px;
            border-top-right-radius: 0;
            border-top-left-radius: 0
        }

        .nav-tabs>li:first-child>.dropdown-menu {
            margin-left: 0
        }

        @media (min-width:768px) {
            .nav-tabs-vertical {
                float: left;
                width: 220px;
                border-bottom: 0
            }

            .nav-tabs-vertical>li {
                float: none;
                margin-right: -1px;
                margin-bottom: 0
            }

            .nav-tabs-vertical>li>a {
                margin-bottom: 5px;
                margin-left: 0
            }

            .nav-tabs-vertical>li>a:hover {
                border-color: #d2d2d2;
                border-right-color: #b3b3b3
            }

            .nav-tabs-vertical>li.active>a,
            .nav-tabs-vertical>li.active>a:hover,
            .nav-tabs-vertical>li.active>a:focus {
                border-right-color: transparent;
                border-bottom-color: #b3b3b3
            }

            .tab-content-vertical {
                padding: 20px 0 20px 20px;
                margin-left: 220px;
                font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
                border: 1px solid #b3b3b3;
                border-width: 1px 0 0 1px
            }
        }

        .navbar {
            position: relative;
            z-index: 10000000;
            min-height: 50px;
            margin-bottom: 20px;
            border: 1px solid transparent
        }

        .navbar:before,
        .navbar:after {
            display: table;
            content: " "
        }

        .navbar:after {
            clear: both
        }

        .navbar:before,
        .navbar:after {
            display: table;
            content: " "
        }

        .navbar:after {
            clear: both
        }

        @media (min-width:768px) {
            .navbar {
                border-radius: 0
            }
        }

        .navbar-header:before,
        .navbar-header:after {
            display: table;
            content: " "
        }

        .navbar-header:after {
            clear: both
        }

        .navbar-header:before,
        .navbar-header:after {
            display: table;
            content: " "
        }

        .navbar-header:after {
            clear: both
        }

        @media (min-width:768px) {
            .navbar-header {
                float: left
            }
        }

        .navbar-collapse {
            max-height: 340px;
            padding-right: 15px;
            padding-left: 15px;
            overflow-x: visible;
            border-top: 1px solid transparent;
            -webkit-overflow-scrolling: touch
        }

        .navbar-collapse:before,
        .navbar-collapse:after {
            display: table;
            content: " "
        }

        .navbar-collapse:after {
            clear: both
        }

        .navbar-collapse:before,
        .navbar-collapse:after {
            display: table;
            content: " "
        }

        .navbar-collapse:after {
            clear: both
        }

        .navbar-collapse.in {
            overflow-y: auto
        }

        @media (min-width:768px) {
            .navbar-collapse {
                width: auto;
                border-top: 0;
                box-shadow: none
            }

            .navbar-collapse.collapse {
                display: block !important;
                height: auto !important;
                padding-bottom: 0;
                overflow: visible !important
            }

            .navbar-collapse.in {
                overflow-y: visible
            }

            .navbar-collapse .navbar-nav.navbar-left:first-child {
                margin-left: -15px
            }

            .navbar-collapse .navbar-nav.navbar-right:last-child {
                margin-right: -15px
            }

            .navbar-collapse .navbar-text:last-child {
                margin-right: 0
            }
        }

        .container>.navbar-header,
        .container>.navbar-collapse {
            margin-right: -15px;
            margin-left: -15px
        }

        @media (min-width:768px) {

            .container>.navbar-header,
            .container>.navbar-collapse {
                margin-right: 0;
                margin-left: 0
            }
        }

        .navbar-static-top {
            border-width: 0 0 1px
        }

        @media (min-width:768px) {
            .navbar-static-top {
                border-radius: 0
            }
        }

        .navbar-fixed-top,
        .navbar-fixed-bottom {
            position: fixed;
            right: 0;
            left: 0;
            border-width: 0 0 1px
        }

        @media (min-width:768px) {

            .navbar-fixed-top,
            .navbar-fixed-bottom {
                border-radius: 0
            }
        }

        .navbar-fixed-top {
            top: 0;
            z-index: 1030
        }

        .navbar-fixed-bottom {
            bottom: 0;
            margin-bottom: 0
        }

        .navbar-brand {
            float: left;
            padding: 15px;
            font-size: 18px;
            line-height: 20px
        }

        .navbar-brand:hover,
        .navbar-brand:focus {
            text-decoration: none
        }

        @media (min-width:768px) {
            .navbar>.container .navbar-brand {
                margin-left: -15px
            }
        }

        .navbar-toggle {
            position: relative;
            float: right;
            padding: 9px 10px;
            margin-top: 8px;
            margin-right: 15px;
            margin-bottom: 8px;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: 0
        }

        .navbar-toggle .icon-bar {
            display: block;
            width: 22px;
            height: 2px;
            border-radius: 1px
        }

        .navbar-toggle .icon-bar+.icon-bar {
            margin-top: 4px
        }

        @media (min-width:768px) {
            .navbar-toggle {
                display: none
            }
        }

        .navbar-nav {
            margin: 7.5px -15px
        }

        .navbar-nav>li>a {
            padding-top: 10px;
            padding-bottom: 10px;
            line-height: 20px
        }

        @media (max-width:767px) {
            .navbar-nav .open .dropdown-menu {
                position: static;
                float: none;
                width: auto;
                margin-top: 0;
                background-color: transparent;
                border: 0;
                box-shadow: none
            }

            .navbar-nav .open .dropdown-menu>li>a,
            .navbar-nav .open .dropdown-menu .dropdown-header {
                padding: 7px 15px 7px 25px
            }

            .navbar-nav .open .dropdown-menu>li>a {
                line-height: 20px;
                color: #fff
            }

            .navbar-nav .open .dropdown-menu>li>a:hover,
            .navbar-nav .open .dropdown-menu>li>a:focus {
                color: #333;
                background-image: none
            }

            .navbar-nav .open .dropdown-menu .dropdown-columns,
            .navbar-nav .open .dropdown-menu .dropdown-columns li {
                display: block
            }

            .navbar-nav .open .dropdown-menu .dropdown-columns li {
                padding: 0
            }
        }

        @media (min-width:768px) {
            .navbar-nav {
                float: left;
                margin: 0
            }

            .navbar-nav>li {
                float: left
            }

            .navbar-nav>li>a {
                padding-top: 15px;
                padding-bottom: 15px
            }
        }

        @media (min-width:768px) {
            .navbar-left {
                float: left !important
            }

            .navbar-right {
                float: right !important
            }
        }

        .navbar-form {
            padding: 10px 15px;
            margin-top: 7px;
            margin-right: -15px;
            margin-bottom: 7px;
            margin-left: -15px;
            border-top: 1px solid transparent;
            border-bottom: 1px solid transparent;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1)
        }

        @media (min-width:768px) {
            .navbar-form .form-group {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle
            }

            .navbar-form .form-control {
                display: inline-block
            }

            .navbar-form .radio,
            .navbar-form .checkbox {
                display: inline-block;
                padding-left: 0;
                margin-top: 0;
                margin-bottom: 0
            }

            .navbar-form .radio input[type=radio],
            .navbar-form .checkbox input[type=checkbox] {
                float: none;
                margin-left: 0
            }
        }

        @media (max-width:767px) {
            .navbar-form .form-group {
                margin-bottom: 5px
            }
        }

        @media (min-width:768px) {
            .navbar-form {
                width: auto;
                padding-top: 0;
                padding-bottom: 0;
                margin-right: 0;
                margin-left: 0;
                border: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }
        }

        .navbar-nav>li>.dropdown-menu {
            margin-top: 0;
            border-top-right-radius: 0;
            border-top-left-radius: 0
        }

        .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .navbar-nav.pull-right>li>.dropdown-menu,
        .navbar-nav>li>.dropdown-menu.pull-right {
            right: 0;
            left: auto
        }

        .navbar-btn {
            margin-top: 7px;
            margin-bottom: 7px
        }

        .navbar-text {
            float: left;
            margin-top: 15px;
            margin-bottom: 15px
        }

        @media (min-width:768px) {
            .navbar-text {
                margin-right: 15px;
                margin-left: 15px
            }
        }

        .navbar-default {
            background-color: #f8f8f8;
            border-color: #e7e7e7
        }

        .navbar-default .navbar-brand {
            color: #777
        }

        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: #5e5e5e;
            background-color: transparent
        }

        .navbar-default .navbar-text {
            color: #777
        }

        .navbar-default .navbar-nav>li>a {
            color: #777
        }

        .navbar-default .navbar-nav>li>a:hover,
        .navbar-default .navbar-nav>li>a:focus {
            color: #333;
            background-color: transparent
        }

        .navbar-default .navbar-nav>.active>a,
        .navbar-default .navbar-nav>.active>a:hover,
        .navbar-default .navbar-nav>.active>a:focus {
            color: #555;
            background-color: #e7e7e7
        }

        .navbar-default .navbar-nav>.disabled>a,
        .navbar-default .navbar-nav>.disabled>a:hover,
        .navbar-default .navbar-nav>.disabled>a:focus {
            color: #ccc;
            background-color: transparent
        }

        .navbar-default .navbar-toggle {
            border-color: #ddd
        }

        .navbar-default .navbar-toggle:hover,
        .navbar-default .navbar-toggle:focus {
            color: #5e5e5e;
            background-color: #555;
            outline: 0
        }

        .navbar-default .navbar-toggle .icon-bar {
            background-color: #ccc
        }

        .navbar-default .navbar-collapse,
        .navbar-default .navbar-form {
            border-color: #555
        }

        .navbar-default .navbar-nav>.dropdown>a:hover .caret,
        .navbar-default .navbar-nav>.dropdown>a:focus .caret {
            border-top-color: #333;
            border-bottom-color: #333
        }

        .navbar-default .navbar-nav>.open>a,
        .navbar-default .navbar-nav>.open>a:hover,
        .navbar-default .navbar-nav>.open>a:focus {
            color: #555;
            background-color: #e7e7e7
        }

        .navbar-default .navbar-nav>.open>a .caret,
        .navbar-default .navbar-nav>.open>a:hover .caret,
        .navbar-default .navbar-nav>.open>a:focus .caret {
            border-top-color: #555;
            border-bottom-color: #555
        }

        .navbar-default .navbar-nav>.dropdown>a .caret {
            border-top-color: #777;
            border-bottom-color: #777
        }

        @media (max-width:767px) {
            .navbar-default .navbar-nav .open .dropdown-menu>li>a {
                color: #777
            }

            .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus {
                color: #fff;
                background-color: transparent
            }

            .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
            .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus {
                color: #555;
                background-color: #e7e7e7
            }

            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus {
                color: #ccc;
                background-color: transparent
            }
        }

        .navbar-default .navbar-link {
            color: #777
        }

        .navbar-default .navbar-link:hover {
            color: #333
        }

        .navbar-inverse {
            background-color: #222;
            border-color: #080808
        }

        .navbar-inverse .navbar-brand {
            color: #999
        }

        .navbar-inverse .navbar-brand:hover,
        .navbar-inverse .navbar-brand:focus {
            color: #fff;
            background-color: transparent
        }

        .navbar-inverse .navbar-text {
            color: #999
        }

        .navbar-inverse .navbar-nav>li>a {
            color: #999
        }

        .navbar-inverse .navbar-nav>li>a:hover,
        .navbar-inverse .navbar-nav>li>a:focus {
            color: #fff;
            background-color: transparent
        }

        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:hover,
        .navbar-inverse .navbar-nav>.active>a:focus {
            color: #fff;
            background-color: #080808
        }

        .navbar-inverse .navbar-nav>.disabled>a,
        .navbar-inverse .navbar-nav>.disabled>a:hover,
        .navbar-inverse .navbar-nav>.disabled>a:focus {
            color: #444;
            background-color: transparent
        }

        .navbar-inverse .navbar-toggle {
            border-color: #333
        }

        .navbar-inverse .navbar-toggle:hover,
        .navbar-inverse .navbar-toggle:focus {
            background-color: #333
        }

        .navbar-inverse .navbar-toggle .icon-bar {
            background-color: #fff
        }

        .navbar-inverse .navbar-collapse,
        .navbar-inverse .navbar-form {
            border-color: #101010
        }

        .navbar-inverse .navbar-nav>.open>a,
        .navbar-inverse .navbar-nav>.open>a:hover,
        .navbar-inverse .navbar-nav>.open>a:focus {
            color: #fff;
            background-color: #080808
        }

        .navbar-inverse .navbar-nav>.dropdown>a:hover .caret {
            border-top-color: #fff;
            border-bottom-color: #fff
        }

        .navbar-inverse .navbar-nav>.dropdown>a .caret {
            border-top-color: #999;
            border-bottom-color: #999
        }

        .navbar-inverse .navbar-nav>.open>a .caret,
        .navbar-inverse .navbar-nav>.open>a:hover .caret,
        .navbar-inverse .navbar-nav>.open>a:focus .caret {
            border-top-color: #fff;
            border-bottom-color: #fff
        }

        @media (max-width:767px) {
            .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
                border-color: #080808
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
                color: #999
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover,
            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus {
                color: #fff;
                background-color: transparent
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus {
                color: #fff;
                background-color: #080808
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus {
                color: #444;
                background-color: transparent
            }
        }

        .navbar-inverse .navbar-link {
            color: #999
        }

        .navbar-inverse .navbar-link:hover {
            color: #fff
        }

        .breadcrumb {
            padding: 0;
            margin-bottom: 20px;
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-size: 30px;
            font-weight: 300;
            list-style: none
        }

        .breadcrumb>li {
            display: inline-block
        }

        .breadcrumb>li+li:before {
            padding: 0 8px 0 0;
            font-family: uxfont;
            font-size: 20px;
            color: #333;
            vertical-align: middle;
            content: "\e367"
        }

        .breadcrumb>.active {
            color: #333
        }

        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 0
        }

        .pagination>li>a,
        .pagination>li>span {
            min-width: 30px;
            min-height: 30px;
            font-size: 14px;
            line-height: 30px
        }

        .pagination>li:first-child>a,
        .pagination>li:first-child>span {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .pagination>li:last-child>a,
        .pagination>li:last-child>span {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .pagination>li {
            display: inline
        }

        .pagination>li>a,
        .pagination>li>span {
            position: relative;
            float: left;
            padding: 0 1px;
            margin-left: -1px;
            color: #333;
            text-align: center;
            text-decoration: none
        }

        .pagination>li:first-child>a,
        .pagination>li:first-child>span {
            margin-left: 0;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .pagination>li:last-child>a,
        .pagination>li:last-child>span {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .pagination>li>a:hover,
        .pagination>li>a:focus {
            color: #679b08
        }

        .pagination>.active>a,
        .pagination>.active>span,
        .pagination>.active>a:hover,
        .pagination>.active>span:hover,
        .pagination>.active>a:focus,
        .pagination>.active>span:focus {
            z-index: 2;
            color: #fff;
            cursor: default;
            background-color: #679b08;
            border-color: #679b08
        }

        .pagination>.disabled>span,
        .pagination>.disabled>span:hover,
        .pagination>.disabled>span:focus,
        .pagination>.disabled>a,
        .pagination>.disabled>a:hover,
        .pagination>.disabled>a:focus {
            color: #999;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd
        }

        .pagination-lg>li>a,
        .pagination-lg>li>span {
            min-width: 38px;
            min-height: 38px;
            font-size: 18px;
            line-height: 38px
        }

        .pagination-lg>li:first-child>a,
        .pagination-lg>li:first-child>span {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .pagination-lg>li:last-child>a,
        .pagination-lg>li:last-child>span {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .pagination-sm>li>a,
        .pagination-sm>li>span {
            min-width: 26px;
            min-height: 26px;
            font-size: 12px;
            line-height: 26px
        }

        .pagination-sm>li:first-child>a,
        .pagination-sm>li:first-child>span {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .pagination-sm>li:last-child>a,
        .pagination-sm>li:last-child>span {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .pager {
            padding-left: 0;
            margin: 20px 0;
            text-align: center;
            list-style: none
        }

        .pager:before,
        .pager:after {
            display: table;
            content: " "
        }

        .pager:after {
            clear: both
        }

        .pager:before,
        .pager:after {
            display: table;
            content: " "
        }

        .pager:after {
            clear: both
        }

        .pager li {
            display: inline
        }

        .pager li>a,
        .pager li>span {
            display: inline-block;
            padding: 5px 14px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 15px
        }

        .pager li>a:hover,
        .pager li>a:focus {
            text-decoration: none;
            background-color: #eee
        }

        .pager .next>a,
        .pager .next>span {
            float: right
        }

        .pager .previous>a,
        .pager .previous>span {
            float: left
        }

        .pager .disabled>a,
        .pager .disabled>a:hover,
        .pager .disabled>a:focus,
        .pager .disabled>span {
            color: #999;
            cursor: not-allowed;
            background-color: #fff
        }

        .label {
            display: inline;
            padding: .2em .6em .3em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25em
        }

        .label[href]:hover,
        .label[href]:focus {
            color: #fff;
            text-decoration: none;
            cursor: pointer
        }

        .label:empty {
            display: none
        }

        .label-default {
            background-color: #999
        }

        .label-default[href]:hover,
        .label-default[href]:focus {
            background-color: gray
        }

        .label-primary {
            background-color: #679b08
        }

        .label-primary[href]:hover,
        .label-primary[href]:focus {
            background-color: #476b05
        }

        .label-success {
            background-color: #679b08
        }

        .label-success[href]:hover,
        .label-success[href]:focus {
            background-color: #476b05
        }

        .label-info {
            background-color: #3182e6
        }

        .label-info[href]:hover,
        .label-info[href]:focus {
            background-color: #1969cb
        }

        .label-warning {
            background-color: #ff8a00
        }

        .label-warning[href]:hover,
        .label-warning[href]:focus {
            background-color: #cc6e00
        }

        .label-danger {
            background-color: #f00000
        }

        .label-danger[href]:hover,
        .label-danger[href]:focus {
            background-color: #bd0000
        }

        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 12px;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            background-color: #999;
            border-radius: 10px
        }

        .badge:empty {
            display: none
        }

        a.badge:hover,
        a.badge:focus {
            color: #fff;
            text-decoration: none;
            cursor: pointer
        }

        .btn .badge {
            position: relative;
            top: -1px
        }

        a.list-group-item.active>.badge,
        .nav-pills>.active>a>.badge {
            color: #3282e6;
            background-color: #fff
        }

        .nav-pills>li>a>.badge {
            margin-left: 3px
        }

        .alert {
            position: relative;
            padding: 10px;
            margin: 15px;
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
            color: #fff;
            background-color: #8b8b8b;
            border-color: #8b8b8b;
            border-radius: 0
        }

        .alert hr {
            border-top-color: #7e7e7e
        }

        .alert .alert-link {
            color: #fff
        }

        .alert .close,
        .alert .close:hover,
        .alert .close:focus {
            color: #fff
        }

        .alert:before,
        .alert:after {
            display: table;
            content: " "
        }

        .alert:after {
            clear: both
        }

        .alert:before,
        .alert:after {
            display: table;
            content: " "
        }

        .alert:after {
            clear: both
        }

        @media (min-width:480px) {
            .alert {
                padding-left: 40px;
                margin: 0 0 20px
            }
        }

        .alert h4,
        .alert h5,
        .alert h6 {
            margin-top: 0;
            color: inherit
        }

        .alert .alert-link {
            color: #fff;
            text-decoration: underline
        }

        .alert .alert-link:hover,
        .alert .alert-link:focus {
            text-decoration: none
        }

        .alert .btn-link {
            padding: 0;
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
            color: #fff
        }

        .alert .btn-link .uxicon,
        .alert .btn-link .uxicon:hover,
        .alert .btn-link .uxicon:focus {
            color: #fff
        }

        .alert .alert-icon.uxicon {
            position: absolute;
            top: 9px;
            left: 10px;
            display: none;
            font-size: 22px;
            color: #fff
        }

        @media (min-width:480px) {
            .alert .alert-icon.uxicon {
                display: block
            }
        }

        .alert>p,
        .alert>ul {
            margin-bottom: 0
        }

        .alert>p+p {
            margin-top: 5px
        }

        .alert-dismissable {
            padding-right: 40px
        }

        .alert-dismissable .close {
            position: absolute;
            top: 14px;
            right: 14px;
            color: inherit;
            opacity: 1
        }

        .alert-success {
            color: #fff;
            background-color: #679b08;
            border-color: #679b08
        }

        .alert-success hr {
            border-top-color: #578307
        }

        .alert-success .alert-link {
            color: #fff
        }

        .alert-success .close,
        .alert-success .close:hover,
        .alert-success .close:focus {
            color: #fff
        }

        .alert-info {
            color: #fff;
            background-color: #3182e6;
            border-color: #3182e6
        }

        .alert-info hr {
            border-top-color: #1b74e2
        }

        .alert-info .alert-link {
            color: #fff
        }

        .alert-info .close,
        .alert-info .close:hover,
        .alert-info .close:focus {
            color: #fff
        }

        .alert-warning {
            color: #fff;
            background-color: #ff8a00;
            border-color: #ff8a00
        }

        .alert-warning hr {
            border-top-color: #e67c00
        }

        .alert-warning .alert-link {
            color: #fff
        }

        .alert-warning .close,
        .alert-warning .close:hover,
        .alert-warning .close:focus {
            color: #fff
        }

        .alert-danger {
            color: #fff;
            background-color: #f00000;
            border-color: #f00000
        }

        .alert-danger hr {
            border-top-color: #d70000
        }

        .alert-danger .alert-link {
            color: #fff
        }

        .alert-danger .close,
        .alert-danger .close:hover,
        .alert-danger .close:focus {
            color: #fff
        }

        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 16px 0
            }

            to {
                background-position: 0 0
            }
        }

        @-moz-keyframes progress-bar-stripes {
            from {
                background-position: 16px 0
            }

            to {
                background-position: 0 0
            }
        }

        @-o-keyframes progress-bar-stripes {
            from {
                background-position: 0 0
            }

            to {
                background-position: 16px 0
            }
        }

        @keyframes progress-bar-stripes {
            from {
                background-position: 16px 0
            }

            to {
                background-position: 0 0
            }
        }

        .progress {
            height: 20px;
            margin-bottom: 20px;
            overflow: hidden;
            background-color: #f5f5f5;
            border-radius: 0
        }

        .progress-bar {
            float: left;
            width: 0;
            height: 100%;
            font-size: 12px;
            color: #fff;
            text-align: center;
            background-color: #679b08;
            -webkit-transition: width .6s ease;
            transition: width .6s ease
        }

        .progress-striped .progress-bar {
            background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(0, 0, 0, .15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(0, 0, 0, .15)), color-stop(0.75, rgba(0, 0, 0, .15)), color-stop(0.75, transparent), to(transparent));
            background-image: -webkit-linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent);
            background-image: -moz-linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent);
            background-size: 16px 16px
        }

        .progress.active .progress-bar {
            -webkit-animation: progress-bar-stripes 500ms linear infinite;
            -moz-animation: progress-bar-stripes 500ms linear infinite;
            -ms-animation: progress-bar-stripes 500ms linear infinite;
            -o-animation: progress-bar-stripes 500ms linear infinite;
            animation: progress-bar-stripes 500ms linear infinite
        }

        .progress-bar-gray {
            background-color: #999
        }

        .progress-striped .progress-bar-gray {
            background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(0, 0, 0, .15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(0, 0, 0, .15)), color-stop(0.75, rgba(0, 0, 0, .15)), color-stop(0.75, transparent), to(transparent));
            background-image: -webkit-linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent);
            background-image: -moz-linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent)
        }

        .progress-bar-success {
            background-color: #679b08
        }

        .progress-striped .progress-bar-success {
            background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(0, 0, 0, .15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(0, 0, 0, .15)), color-stop(0.75, rgba(0, 0, 0, .15)), color-stop(0.75, transparent), to(transparent));
            background-image: -webkit-linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent);
            background-image: -moz-linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent)
        }

        .progress-bar-info {
            background-color: #3182e6
        }

        .progress-striped .progress-bar-info {
            background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(0, 0, 0, .15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(0, 0, 0, .15)), color-stop(0.75, rgba(0, 0, 0, .15)), color-stop(0.75, transparent), to(transparent));
            background-image: -webkit-linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent);
            background-image: -moz-linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent)
        }

        .progress-bar-warning {
            background-color: #ff8a00
        }

        .progress-striped .progress-bar-warning {
            background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(0, 0, 0, .15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(0, 0, 0, .15)), color-stop(0.75, rgba(0, 0, 0, .15)), color-stop(0.75, transparent), to(transparent));
            background-image: -webkit-linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent);
            background-image: -moz-linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent)
        }

        .progress-bar-danger {
            background-color: #f00000
        }

        .progress-striped .progress-bar-danger {
            background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(0, 0, 0, .15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(0, 0, 0, .15)), color-stop(0.75, rgba(0, 0, 0, .15)), color-stop(0.75, transparent), to(transparent));
            background-image: -webkit-linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent);
            background-image: -moz-linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(135deg, rgba(0, 0, 0, .15) 25%, transparent 25%, transparent 50%, rgba(0, 0, 0, .15) 50%, rgba(0, 0, 0, .15) 75%, transparent 75%, transparent)
        }

        .media,
        .media-body {
            overflow: hidden;
            zoom: 1
        }

        .media,
        .media .media {
            margin-top: 15px
        }

        .media:first-child {
            margin-top: 0
        }

        .media-object {
            display: block
        }

        .media-heading {
            margin: 0 0 5px
        }

        .media>.pull-left {
            margin-right: 10px
        }

        .media>.pull-right {
            margin-left: 10px
        }

        .media-list {
            padding-left: 0;
            list-style: none
        }

        .list-group {
            padding-left: 0;
            margin-bottom: 20px
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 10px 15px;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid #ddd
        }

        .list-group-item:first-child {
            border-top-right-radius: 0;
            border-top-left-radius: 0
        }

        .list-group-item:last-child {
            margin-bottom: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .list-group-item>.badge {
            float: right
        }

        .list-group-item>.badge+.badge {
            margin-right: 5px
        }

        a.list-group-item {
            color: #555
        }

        a.list-group-item .list-group-item-heading {
            color: #333
        }

        a.list-group-item:hover,
        a.list-group-item:focus {
            text-decoration: none;
            background-color: #f5f5f5
        }

        .list-group-item.active,
        .list-group-item.active:hover,
        .list-group-item.active:focus {
            z-index: 2;
            color: #fff;
            background-color: #679b08;
            border-color: #679b08
        }

        .list-group-item.active .list-group-item-heading,
        .list-group-item.active:hover .list-group-item-heading,
        .list-group-item.active:focus .list-group-item-heading {
            color: inherit
        }

        .list-group-item.active .list-group-item-text,
        .list-group-item.active:hover .list-group-item-text,
        .list-group-item.active:focus .list-group-item-text {
            color: #caf877
        }

        .list-group-item-heading {
            margin-top: 0;
            margin-bottom: 5px
        }

        .list-group-item-text {
            margin-bottom: 0;
            line-height: 1.3
        }

        .panel {
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 0;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
        }

        .panel-body {
            padding: 15px
        }

        .panel-body:before,
        .panel-body:after {
            display: table;
            content: " "
        }

        .panel-body:after {
            clear: both
        }

        .panel-body:before,
        .panel-body:after {
            display: table;
            content: " "
        }

        .panel-body:after {
            clear: both
        }

        .panel>.list-group {
            margin-bottom: 0
        }

        .panel>.list-group .list-group-item {
            border-width: 1px 0
        }

        .panel>.list-group .list-group-item:first-child {
            border-top-right-radius: 0;
            border-top-left-radius: 0
        }

        .panel>.list-group .list-group-item:last-child {
            border-bottom: 0
        }

        .panel-heading+.list-group .list-group-item:first-child {
            border-top-width: 0
        }

        .panel>.table {
            margin-bottom: 0
        }

        .panel>.panel-body+.table {
            border-top: 1px solid #b3b3b3
        }

        .panel-heading {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-right-radius: -1px;
            border-top-left-radius: -1px
        }

        .panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 16px
        }

        .panel-title>a {
            color: inherit
        }

        .panel-footer {
            padding: 10px 15px;
            background-color: #f5f5f5;
            border-top: 1px solid #ddd;
            border-bottom-right-radius: -1px;
            border-bottom-left-radius: -1px
        }

        .panel-group .panel {
            margin-bottom: 0;
            overflow: hidden;
            border-radius: 0
        }

        .panel-group .panel+.panel {
            margin-top: 5px
        }

        .panel-group .panel-heading {
            border-bottom: 0
        }

        .panel-group .panel-heading+.panel-collapse .panel-body {
            border-top: 1px solid #ddd
        }

        .panel-group .panel-footer {
            border-top: 0
        }

        .panel-group .panel-footer+.panel-collapse .panel-body {
            border-bottom: 1px solid #ddd
        }

        .panel-default {
            border-color: #ddd
        }

        .panel-default>.panel-heading {
            color: #333;
            background-color: #f5f5f5;
            border-color: #ddd
        }

        .panel-default>.panel-heading+.panel-collapse .panel-body {
            border-top-color: #ddd
        }

        .panel-default>.panel-footer+.panel-collapse .panel-body {
            border-bottom-color: #ddd
        }

        .panel-primary {
            border-color: #679b08
        }

        .panel-primary>.panel-heading {
            color: #fff;
            background-color: #679b08;
            border-color: #679b08
        }

        .panel-primary>.panel-heading+.panel-collapse .panel-body {
            border-top-color: #679b08
        }

        .panel-primary>.panel-footer+.panel-collapse .panel-body {
            border-bottom-color: #679b08
        }

        .panel-success {
            border-color: #e3ecb8
        }

        .panel-success>.panel-heading {
            color: #679b08;
            background-color: #e5f1cc;
            border-color: #e3ecb8
        }

        .panel-success>.panel-heading+.panel-collapse .panel-body {
            border-top-color: #e3ecb8
        }

        .panel-success>.panel-footer+.panel-collapse .panel-body {
            border-bottom-color: #e3ecb8
        }

        .panel-warning {
            border-color: #ffd0bf
        }

        .panel-warning>.panel-heading {
            color: #ff8a00;
            background-color: #ffe3ce;
            border-color: #ffd0bf
        }

        .panel-warning>.panel-heading+.panel-collapse .panel-body {
            border-top-color: #ffd0bf
        }

        .panel-warning>.panel-footer+.panel-collapse .panel-body {
            border-bottom-color: #ffd0bf
        }

        .panel-danger {
            border-color: #ffcad3
        }

        .panel-danger>.panel-heading {
            color: #f00000;
            background-color: #ffd9d9;
            border-color: #ffcad3
        }

        .panel-danger>.panel-heading+.panel-collapse .panel-body {
            border-top-color: #ffcad3
        }

        .panel-danger>.panel-footer+.panel-collapse .panel-body {
            border-bottom-color: #ffcad3
        }

        .panel-info {
            border-color: #bce8f1
        }

        .panel-info>.panel-heading {
            color: #3182e6;
            background-color: #d9edf7;
            border-color: #bce8f1
        }

        .panel-info>.panel-heading+.panel-collapse .panel-body {
            border-top-color: #bce8f1
        }

        .panel-info>.panel-footer+.panel-collapse .panel-body {
            border-bottom-color: #bce8f1
        }

        .well {
            min-height: 20px;
            padding: 19px;
            margin-bottom: 20px;
            background-color: #f5f5f5;
            border: 1px solid #e3e3e3;
            border-radius: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
        }

        .well blockquote {
            border-color: #ddd;
            border-color: rgba(0, 0, 0, .15)
        }

        .well-lg {
            padding: 24px;
            border-radius: 0
        }

        .well-sm {
            padding: 9px;
            border-radius: 0
        }

        .close {
            float: right;
            font-family: uxfont;
            font-size: 14px;
            font-weight: 400;
            line-height: 1;
            color: #555
        }

        .close:before {
            content: "\e208"
        }

        .close:hover,
        .close:focus {
            color: #555;
            text-decoration: none;
            cursor: pointer
        }

        button.close {
            padding: 0;
            cursor: pointer;
            background: transparent;
            border: 0;
            -webkit-appearance: none
        }

        .modal-open {
            overflow: hidden
        }

        body.modal-open,
        .modal-open .navbar-fixed-top,
        .modal-open .navbar-fixed-bottom {
            margin-right: 15px
        }

        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            display: none;
            overflow: auto;
            overflow-y: scroll
        }

        .modal.fade .modal-dialog {
            -webkit-transform: translate(0, -25%);
            -ms-transform: translate(0, -25%);
            transform: translate(0, -25%);
            -webkit-transition: -webkit-transform .3s ease-out;
            -moz-transition: -moz-transform .3s ease-out;
            -o-transition: -o-transform .3s ease-out;
            transition: transform .3s ease-out
        }

        .modal.in .modal-dialog {
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            transform: translate(0, 0)
        }

        .modal-dialog {
            z-index: 1050;
            width: auto;
            padding: 10px;
            margin-right: auto;
            margin-left: auto
        }

        .modal-content {
            position: relative;
            background-color: #fff;
            border: 1px solid #b3b3b3;
            border-radius: 0;
            outline: 0;
            -webkit-box-shadow: 4px 4px 0 rgba(0, 0, 0, .1);
            box-shadow: 4px 4px 0 rgba(0, 0, 0, .1);
            background-clip: padding-box
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
            background-color: #000
        }

        .modal-backdrop.fade {
            opacity: 0;
            filter: alpha(opacity=0)
        }

        .modal-backdrop.in {
            opacity: .5;
            filter: alpha(opacity=50)
        }

        .modal-header {
            padding: 15px 20px 0;
            margin: 0;
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-size: 24px;
            font-weight: 300;
            line-height: 1.1;
            color: #333
        }

        .modal-header small {
            font-weight: 400;
            line-height: 1;
            color: #999
        }

        .modal-header .close {
            margin-top: -2px
        }

        .modal-title {
            margin: 0;
            line-height: 1.428571429
        }

        .modal-body {
            overflow: auto;
            border: 0
        }

        .modal-footer {
            position: relative;
            bottom: -15px;
            padding: 15px 20px;
            margin: 0 -20px;
            text-align: center;
            background-color: #eee
        }

        .modal-footer:before,
        .modal-footer:after {
            display: table;
            content: " "
        }

        .modal-footer:after {
            clear: both
        }

        .modal-footer:before,
        .modal-footer:after {
            display: table;
            content: " "
        }

        .modal-footer:after {
            clear: both
        }

        .modal-footer .btn+.btn {
            margin-bottom: 0;
            margin-left: 10px
        }

        .modal-footer .btn-group .btn+.btn {
            margin-left: -1px
        }

        .modal-footer .btn-block+.btn-block {
            margin-left: 0
        }

        @media screen and (min-width:768px) {
            .modal-dialog {
                right: auto;
                left: 50%;
                width: 600px;
                padding-top: 30px;
                padding-bottom: 30px
            }
        }

        .tooltip {
            position: absolute;
            z-index: 1030;
            display: block;
            padding: 6px;
            margin: 3px;
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-size: 14px;
            font-weight: 300;
            line-height: 1.4;
            opacity: 0;
            filter: alpha(opacity=0);
            visibility: visible
        }

        .tooltip a {
            color: #fff;
            text-decoration: underline
        }

        .tooltip a:hover {
            color: #fff;
            text-decoration: none
        }

        .tooltip.in {
            opacity: 1;
            filter: alpha(opacity=100)
        }

        .tooltip .close {
            margin: 10px;
            color: #fff
        }

        .tooltip .close:focus {
            outline: 0
        }

        .tooltip-inner {
            max-width: auto;
            padding: 12px 15px;
            color: #fff;
            text-align: left;
            text-decoration: none;
            background-color: #333;
            border: 1px solid #333;
            border-radius: 0
        }

        .tooltip-arrow {
            border-width: 7px
        }

        .tooltip-arrow,
        .tooltip-arrow:after {
            position: absolute;
            display: block;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid
        }

        .tooltip-arrow:after {
            border-width: 6px;
            content: ""
        }

        .tooltip.top .tooltip-arrow,
        .tooltip.top-right .tooltip-arrow,
        .tooltip.top-left .tooltip-arrow {
            bottom: 0;
            border-top-color: #333;
            border-bottom-width: 0
        }

        .tooltip.top .tooltip-arrow:after,
        .tooltip.top-right .tooltip-arrow:after,
        .tooltip.top-left .tooltip-arrow:after {
            bottom: 1px;
            margin-left: -6px;
            border-top-color: #333;
            border-bottom-width: 0;
            content: " "
        }

        .tooltip.top .tooltip-arrow {
            left: 50%;
            margin-left: -7px
        }

        .tooltip.top-right .tooltip-arrow {
            right: 16.5px
        }

        .tooltip.top-left .tooltip-arrow {
            left: 16.5px
        }

        .tooltip.right .tooltip-arrow,
        .tooltip.right-top .tooltip-arrow,
        .tooltip.right-bottom .tooltip-arrow {
            left: 0;
            border-right-color: #333;
            border-left-width: 0
        }

        .tooltip.right .tooltip-arrow:after,
        .tooltip.right-top .tooltip-arrow:after,
        .tooltip.right-bottom .tooltip-arrow:after {
            bottom: -6px;
            left: 1px;
            border-right-color: #333;
            border-left-width: 0;
            content: " "
        }

        .tooltip.right .tooltip-arrow {
            top: 50%;
            margin-top: -7px
        }

        .tooltip.right-bottom .tooltip-arrow {
            bottom: 16.5px
        }

        .tooltip.right-top .tooltip-arrow {
            top: 16.5px
        }

        .tooltip.bottom .tooltip-arrow,
        .tooltip.bottom-right .tooltip-arrow,
        .tooltip.bottom-left .tooltip-arrow {
            top: 0;
            border-bottom-color: #333;
            border-top-width: 0
        }

        .tooltip.bottom .tooltip-arrow:after,
        .tooltip.bottom-right .tooltip-arrow:after,
        .tooltip.bottom-left .tooltip-arrow:after {
            top: 1px;
            margin-left: -6px;
            border-bottom-color: #333;
            border-top-width: 0;
            content: " "
        }

        .tooltip.bottom .tooltip-arrow {
            left: 50%;
            margin-left: -7px
        }

        .tooltip.bottom-right .tooltip-arrow {
            right: 16.5px
        }

        .tooltip.bottom-left .tooltip-arrow {
            left: 16.5px
        }

        .tooltip.left .tooltip-arrow,
        .tooltip.left-top .tooltip-arrow,
        .tooltip.left-bottom .tooltip-arrow {
            right: 0;
            border-left-color: #333;
            border-right-width: 0
        }

        .tooltip.left .tooltip-arrow:after,
        .tooltip.left-top .tooltip-arrow:after,
        .tooltip.left-bottom .tooltip-arrow:after {
            right: 1px;
            bottom: -6px;
            border-left-color: #333;
            border-right-width: 0;
            content: " "
        }

        .tooltip.left .tooltip-arrow {
            top: 50%;
            margin-top: -7px
        }

        .tooltip.left-bottom .tooltip-arrow {
            bottom: 16.5px
        }

        .tooltip.left-top .tooltip-arrow {
            top: 16.5px
        }

        .sf-qt .tooltip-inner {
            padding: 7px 10px;
            text-align: center
        }

        .tooltip-title {
            margin-bottom: 5px;
            font-size: 18px;
            color: inherit
        }

        .tooltip-inverse a {
            color: #3182e6;
            text-decoration: none
        }

        .tooltip-inverse a:hover {
            color: #1d6ccd;
            text-decoration: underline
        }

        .tooltip-inverse.top .tooltip-arrow,
        .tooltip-inverse.top-right .tooltip-arrow,
        .tooltip-inverse.top-left .tooltip-arrow {
            border-top-color: #b3b3b3
        }

        .tooltip-inverse.top .tooltip-arrow:after,
        .tooltip-inverse.top-right .tooltip-arrow:after,
        .tooltip-inverse.top-left .tooltip-arrow:after {
            border-top-color: #fff
        }

        .tooltip-inverse.right .tooltip-arrow,
        .tooltip-inverse.right-top .tooltip-arrow,
        .tooltip-inverse.right-bottom .tooltip-arrow {
            border-right-color: #b3b3b3
        }

        .tooltip-inverse.right .tooltip-arrow:after,
        .tooltip-inverse.right-top .tooltip-arrow:after,
        .tooltip-inverse.right-bottom .tooltip-arrow:after {
            border-right-color: #fff
        }

        .tooltip-inverse.bottom .tooltip-arrow,
        .tooltip-inverse.bottom-right .tooltip-arrow,
        .tooltip-inverse.bottom-left .tooltip-arrow {
            border-bottom-color: #b3b3b3;
            border-top-width: 0
        }

        .tooltip-inverse.bottom .tooltip-arrow:after,
        .tooltip-inverse.bottom-right .tooltip-arrow:after,
        .tooltip-inverse.bottom-left .tooltip-arrow:after {
            border-bottom-color: #fff
        }

        .tooltip-inverse.left .tooltip-arrow,
        .tooltip-inverse.left-top .tooltip-arrow,
        .tooltip-inverse.left-bottom .tooltip-arrow {
            border-left-color: #b3b3b3
        }

        .tooltip-inverse.left .tooltip-arrow:after,
        .tooltip-inverse.left-top .tooltip-arrow:after,
        .tooltip-inverse.left-bottom .tooltip-arrow:after {
            border-left-color: #fff
        }

        .tooltip-inverse .close {
            color: #333
        }

        .tooltip-inverse .tooltip-inner {
            color: #333;
            background-color: #fff;
            border-color: #b3b3b3
        }

        .tooltip-muted.top .tooltip-arrow,
        .tooltip-muted.top-right .tooltip-arrow,
        .tooltip-muted.top-left .tooltip-arrow {
            border-top-color: #999
        }

        .tooltip-muted.top .tooltip-arrow:after,
        .tooltip-muted.top-right .tooltip-arrow:after,
        .tooltip-muted.top-left .tooltip-arrow:after {
            border-top-color: #999
        }

        .tooltip-muted.right .tooltip-arrow,
        .tooltip-muted.right-top .tooltip-arrow,
        .tooltip-muted.right-bottom .tooltip-arrow {
            border-right-color: #999
        }

        .tooltip-muted.right .tooltip-arrow:after,
        .tooltip-muted.right-top .tooltip-arrow:after,
        .tooltip-muted.right-bottom .tooltip-arrow:after {
            border-right-color: #999
        }

        .tooltip-muted.bottom .tooltip-arrow,
        .tooltip-muted.bottom-right .tooltip-arrow,
        .tooltip-muted.bottom-left .tooltip-arrow {
            border-bottom-color: #999;
            border-top-width: 0
        }

        .tooltip-muted.bottom .tooltip-arrow:after,
        .tooltip-muted.bottom-right .tooltip-arrow:after,
        .tooltip-muted.bottom-left .tooltip-arrow:after {
            border-bottom-color: #999
        }

        .tooltip-muted.left .tooltip-arrow,
        .tooltip-muted.left-top .tooltip-arrow,
        .tooltip-muted.left-bottom .tooltip-arrow {
            border-left-color: #999
        }

        .tooltip-muted.left .tooltip-arrow:after,
        .tooltip-muted.left-top .tooltip-arrow:after,
        .tooltip-muted.left-bottom .tooltip-arrow:after {
            border-left-color: #999
        }

        .tooltip-muted .close {
            color: #fff
        }

        .tooltip-muted .tooltip-inner {
            color: #fff;
            background-color: #999;
            border-color: #999
        }

        .tooltip-success.top .tooltip-arrow,
        .tooltip-success.top-right .tooltip-arrow,
        .tooltip-success.top-left .tooltip-arrow {
            border-top-color: #679b08
        }

        .tooltip-success.top .tooltip-arrow:after,
        .tooltip-success.top-right .tooltip-arrow:after,
        .tooltip-success.top-left .tooltip-arrow:after {
            border-top-color: #679b08
        }

        .tooltip-success.right .tooltip-arrow,
        .tooltip-success.right-top .tooltip-arrow,
        .tooltip-success.right-bottom .tooltip-arrow {
            border-right-color: #679b08
        }

        .tooltip-success.right .tooltip-arrow:after,
        .tooltip-success.right-top .tooltip-arrow:after,
        .tooltip-success.right-bottom .tooltip-arrow:after {
            border-right-color: #679b08
        }

        .tooltip-success.bottom .tooltip-arrow,
        .tooltip-success.bottom-right .tooltip-arrow,
        .tooltip-success.bottom-left .tooltip-arrow {
            border-bottom-color: #679b08;
            border-top-width: 0
        }

        .tooltip-success.bottom .tooltip-arrow:after,
        .tooltip-success.bottom-right .tooltip-arrow:after,
        .tooltip-success.bottom-left .tooltip-arrow:after {
            border-bottom-color: #679b08
        }

        .tooltip-success.left .tooltip-arrow,
        .tooltip-success.left-top .tooltip-arrow,
        .tooltip-success.left-bottom .tooltip-arrow {
            border-left-color: #679b08
        }

        .tooltip-success.left .tooltip-arrow:after,
        .tooltip-success.left-top .tooltip-arrow:after,
        .tooltip-success.left-bottom .tooltip-arrow:after {
            border-left-color: #679b08
        }

        .tooltip-success .close {
            color: #fff
        }

        .tooltip-success .tooltip-inner {
            color: #fff;
            background-color: #679b08;
            border-color: #679b08
        }

        .tooltip-warning.top .tooltip-arrow,
        .tooltip-warning.top-right .tooltip-arrow,
        .tooltip-warning.top-left .tooltip-arrow {
            border-top-color: #ff8a00
        }

        .tooltip-warning.top .tooltip-arrow:after,
        .tooltip-warning.top-right .tooltip-arrow:after,
        .tooltip-warning.top-left .tooltip-arrow:after {
            border-top-color: #ff8a00
        }

        .tooltip-warning.right .tooltip-arrow,
        .tooltip-warning.right-top .tooltip-arrow,
        .tooltip-warning.right-bottom .tooltip-arrow {
            border-right-color: #ff8a00
        }

        .tooltip-warning.right .tooltip-arrow:after,
        .tooltip-warning.right-top .tooltip-arrow:after,
        .tooltip-warning.right-bottom .tooltip-arrow:after {
            border-right-color: #ff8a00
        }

        .tooltip-warning.bottom .tooltip-arrow,
        .tooltip-warning.bottom-right .tooltip-arrow,
        .tooltip-warning.bottom-left .tooltip-arrow {
            border-bottom-color: #ff8a00;
            border-top-width: 0
        }

        .tooltip-warning.bottom .tooltip-arrow:after,
        .tooltip-warning.bottom-right .tooltip-arrow:after,
        .tooltip-warning.bottom-left .tooltip-arrow:after {
            border-bottom-color: #ff8a00
        }

        .tooltip-warning.left .tooltip-arrow,
        .tooltip-warning.left-top .tooltip-arrow,
        .tooltip-warning.left-bottom .tooltip-arrow {
            border-left-color: #ff8a00
        }

        .tooltip-warning.left .tooltip-arrow:after,
        .tooltip-warning.left-top .tooltip-arrow:after,
        .tooltip-warning.left-bottom .tooltip-arrow:after {
            border-left-color: #ff8a00
        }

        .tooltip-warning .close {
            color: #fff
        }

        .tooltip-warning .tooltip-inner {
            color: #fff;
            background-color: #ff8a00;
            border-color: #ff8a00
        }

        .tooltip-danger.top .tooltip-arrow,
        .tooltip-danger.top-right .tooltip-arrow,
        .tooltip-danger.top-left .tooltip-arrow {
            border-top-color: #f00000
        }

        .tooltip-danger.top .tooltip-arrow:after,
        .tooltip-danger.top-right .tooltip-arrow:after,
        .tooltip-danger.top-left .tooltip-arrow:after {
            border-top-color: #f00000
        }

        .tooltip-danger.right .tooltip-arrow,
        .tooltip-danger.right-top .tooltip-arrow,
        .tooltip-danger.right-bottom .tooltip-arrow {
            border-right-color: #f00000
        }

        .tooltip-danger.right .tooltip-arrow:after,
        .tooltip-danger.right-top .tooltip-arrow:after,
        .tooltip-danger.right-bottom .tooltip-arrow:after {
            border-right-color: #f00000
        }

        .tooltip-danger.bottom .tooltip-arrow,
        .tooltip-danger.bottom-right .tooltip-arrow,
        .tooltip-danger.bottom-left .tooltip-arrow {
            border-bottom-color: #f00000;
            border-top-width: 0
        }

        .tooltip-danger.bottom .tooltip-arrow:after,
        .tooltip-danger.bottom-right .tooltip-arrow:after,
        .tooltip-danger.bottom-left .tooltip-arrow:after {
            border-bottom-color: #f00000
        }

        .tooltip-danger.left .tooltip-arrow,
        .tooltip-danger.left-top .tooltip-arrow,
        .tooltip-danger.left-bottom .tooltip-arrow {
            border-left-color: #f00000
        }

        .tooltip-danger.left .tooltip-arrow:after,
        .tooltip-danger.left-top .tooltip-arrow:after,
        .tooltip-danger.left-bottom .tooltip-arrow:after {
            border-left-color: #f00000
        }

        .tooltip-danger .close {
            color: #fff
        }

        .tooltip-danger .tooltip-inner {
            color: #fff;
            background-color: #f00000;
            border-color: #f00000
        }

        .tooltip-list .tooltip-inner {
            width: 100%;
            padding: 0
        }

        .tooltip .dropdown-menu {
            position: static;
            display: block;
            float: none;
            border: 0 none
        }

        .sf-tip.uxicon {
            cursor: pointer
        }

        .popover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1010;
            display: none;
            max-width: 276px;
            padding: 1px;
            text-align: left;
            white-space: normal;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 0;
            -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            background-clip: padding-box
        }

        .popover.top {
            margin-top: -10px
        }

        .popover.right {
            margin-left: 10px
        }

        .popover.bottom {
            margin-top: 10px
        }

        .popover.left {
            margin-left: -10px
        }

        .popover-title {
            padding: 8px 14px;
            margin: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 18px;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ebebeb;
            border-radius: 5px 5px 0 0
        }

        .popover-content {
            padding: 9px 14px
        }

        .popover .arrow,
        .popover .arrow:after {
            position: absolute;
            display: block;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid
        }

        .popover .arrow {
            border-width: 11px
        }

        .popover .arrow:after {
            border-width: 10px;
            content: ""
        }

        .popover.top .arrow {
            bottom: -11px;
            left: 50%;
            margin-left: -11px;
            border-top-color: #999;
            border-top-color: rgba(0, 0, 0, .25);
            border-bottom-width: 0
        }

        .popover.top .arrow:after {
            bottom: 1px;
            margin-left: -10px;
            border-top-color: #fff;
            border-bottom-width: 0;
            content: " "
        }

        .popover.right .arrow {
            top: 50%;
            left: -11px;
            margin-top: -11px;
            border-right-color: #999;
            border-right-color: rgba(0, 0, 0, .25);
            border-left-width: 0
        }

        .popover.right .arrow:after {
            bottom: -10px;
            left: 1px;
            border-right-color: #fff;
            border-left-width: 0;
            content: " "
        }

        .popover.bottom .arrow {
            top: -11px;
            left: 50%;
            margin-left: -11px;
            border-bottom-color: #999;
            border-bottom-color: rgba(0, 0, 0, .25);
            border-top-width: 0
        }

        .popover.bottom .arrow:after {
            top: 1px;
            margin-left: -10px;
            border-bottom-color: #fff;
            border-top-width: 0;
            content: " "
        }

        .popover.left .arrow {
            top: 50%;
            right: -11px;
            margin-top: -11px;
            border-left-color: #999;
            border-left-color: rgba(0, 0, 0, .25);
            border-right-width: 0
        }

        .popover.left .arrow:after {
            right: 1px;
            bottom: -10px;
            border-left-color: #fff;
            border-right-width: 0;
            content: " "
        }

        .uxc-header {
            z-index: 10000002;
            min-height: 34px;
            margin-bottom: 0;
            background: #333;
            border: 0
        }

        .uxc-header .navbar-header {
            padding: 0
        }

        .uxc-header .navbar-header .navbar-brand {
            padding: 0;
            margin-right: 27px;
            margin-left: 0;
            line-height: 34px;
            color: #fff
        }

        .uxc-header .navbar-toggle {
            padding: 10px;
            margin: 0;
            border: 0
        }

        .uxc-header .navbar-nav {
            font-weight: 200
        }

        .uxc-header .navbar-nav>li>a {
            padding: 0 15px;
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-size: 16px;
            line-height: 34px;
            -webkit-transition: all 200ms ease-in-out;
            transition: all 200ms ease-in-out
        }

        .uxc-header .navbar-nav>li>a:hover,
        .uxc-header .navbar-nav>li>a:focus {
            color: #fff;
            background-color: #555
        }

        .uxc-header .navbar-nav>.active>a,
        .uxc-header .navbar-nav>.active>a:hover,
        .uxc-header .navbar-nav>.active>a:focus {
            color: inherit;
            background-color: inherit
        }

        .uxc-header .navbar-nav>.open>a,
        .uxc-header .navbar-nav>.open>a:hover,
        .uxc-header .navbar-nav>.open>a:focus {
            color: #fff;
            background-color: #555
        }

        .uxc-gd-logo {
            float: left;
            width: 83px;
            height: 30px;
            margin-top: 1px;
            margin-right: 1px;
            margin-left: 1px;
            text-indent: -9999px;
            background: url(../images/gd-header-logo.png)
        }

        @media (-webkit-min-device-pixel-ratio:2),
        (min-resolution:192dpi) {
            .uxc-gd-logo {
                background: url(../images/gd-header-logo2.png);
                background-size: 83px 30px
            }
        }

        .uxc-pt-icon {
            display: none;
            width: 27px;
            height: 27px;
            padding: 0;
            margin: 0;
            margin: 0 2px
        }

        a .uxc-pt-icon {
            margin: -5px 2px -1px 2px
        }

        .uxc-pt-icon.uxc-pt-icon-gd {
            display: inline-block;
            background: url(../images/shopper-type-sprite.png) no-repeat scroll -1px -82px transparent
        }

        .uxc-pt-icon.uxc-pt-icon-costco {
            display: inline-block;
            background: url(../images/shopper-type-sprite.png) -28px -82px no-repeat
        }

        .uxc-pt-icon.uxc-pt-icon-ddc {
            display: inline-block;
            background: url(../images/shopper-type-sprite.png) -54px -82px no-repeat
        }

        .uxc-pt-icon.uxc-pt-icon-vip {
            display: inline-block;
            background: url(../images/shopper-type-sprite.png) -82px -82px no-repeat
        }

        #uxh-vip-info a {
            color: #3182e6
        }

        .uxc-attention-icon {
            display: inline-block;
            width: 25px;
            height: 25px;
            padding: 0 0 10px;
            margin: 0 0 -8px 5px;
            background: url(../images/shopper-type-sprite.png) -109px -82px no-repeat
        }

        .uxc-alert-action {
            color: #c40000
        }

        .uxc-alert-action:after {
            position: relative;
            top: 2px;
            padding: 0 3px;
            font-size: 20px;
            font-weight: 300;
            line-height: 14px;
            color: #c40000;
            content: "\00bb"
        }

        .uxc-header .nav .caret,
        .uxc-nav .nav .caret {
            position: relative;
            top: -.15em;
            margin-left: 5px;
            font-size: 13px;
            border-top-color: #fff;
            border-bottom-color: #fff
        }

        .uxc-header .navbar-nav>.dropdown>a .caret,
        .uxc-nav .navbar-nav>.dropdown>a .caret,
        .uxc-header .navbar-nav>.dropdown>a:hover .caret,
        .uxc-nav .navbar-nav>.dropdown>a:hover .caret,
        .uxc-header .navbar-nav>.dropdown>a:focus .caret,
        .uxc-nav .navbar-nav>.dropdown>a:focus .caret {
            border-top-color: #fff;
            border-bottom-color: #fff
        }

        .uxc-header,
        .uxc-nav,
        .uxc-header .navbar-nav>li>a,
        .uxc-header .navbar-nav>.active>a,
        .uxc-nav .navbar-nav>li>a,
        .uxc-nav .navbar-nav>.active>a {
            color: #fff
        }

        .uxc-header-nav .navbar-left>li,
        .uxc-header-nav .navbar-left>li>a {
            display: inline-block
        }

        .uxc-header-nav .navbar-left>li:before {
            position: relative;
            top: -1px;
            display: inline-block;
            width: 24px;
            padding: 0 3px;
            font-family: uxfont;
            font-size: 18px;
            font-weight: 300;
            line-height: 20px;
            color: #555;
            text-align: center;
            content: '\e399'
        }

        .uxc-header-nav .navbar-left>li .dropdown-menu {
            margin-left: 28px
        }

        @media (max-width:767px) {
            .uxc-header-nav .navbar-left>li .dropdown-menu {
                margin-left: 0
            }
        }

        .uxc-header-nav .navbar-left>li#uxh-i-server {
            padding-top: 6px;
            font-size: 12px;
            color: #999
        }

        .uxc-header-nav .navbar-left>li#uxh-i-server:before {
            content: ' '
        }

        .uxc-nav {
            z-index: 10000001;
            min-height: 0;
            font-size: 18px;
            font-weight: 400;
            background-color: #679b08;
            border: 0
        }

        .uxc-nav .navbar-nav>li>a {
            padding: 13px 15px;
            -webkit-transition: all 200ms ease-in-out;
            transition: all 200ms ease-in-out
        }

        .uxc-nav .navbar-nav>li>a:hover,
        .uxc-nav .navbar-nav>li>a:focus {
            color: #fff;
            background-color: #77b309
        }

        .uxc-nav .navbar-nav>.active>a,
        .uxc-nav .navbar-nav>.active>a:hover,
        .uxc-nav .navbar-nav>.active>a:focus {
            color: inherit;
            background-color: #470
        }

        .uxc-nav .navbar-nav>.open>a,
        .uxc-nav .navbar-nav>.open>a:hover,
        .uxc-nav .navbar-nav>.open>a:focus {
            color: #fff;
            background-color: #77b309
        }

        .uxc-header-nav .shopper-menu .shopper-header {
            padding: 14px;
            color: #333;
            background-color: #f5f5f5
        }

        .uxc-header-nav .shopper-header>div {
            padding: 0
        }

        #uxh-s-name.uxc-h-mgrmode {
            color: #f00000
        }

        #uxh-s-fullname {
            padding-bottom: 8px;
            margin: 0;
            font-size: 18px;
            line-height: 1em;
            color: #555
        }

        .uxc-header-nav #uxh-s-status {
            padding-top: 5px;
            padding-bottom: 5px
        }

        .uxc-header-nav #uxh-vip-info {
            display: table;
            padding-top: 7px
        }

        .uxc-header-nav #uxh-vip-details {
            display: inline-block;
            color: #555
        }

        .uxc-header-nav #uxh-s-id {
            font-weight: 700;
            color: #555
        }

        .uxc-header-nav #uxh-vip-repname {
            font-weight: 700;
            color: #555
        }

        .uxc-header-nav #uxh-vip-label {
            display: table-cell;
            padding-right: 5px;
            vertical-align: top
        }

        .uxc-header-nav .uxc-shopper-menu-label {
            color: #555
        }

        .uxc-header-nav .shopper-menu>li>a {
            padding-right: 15px;
            padding-left: 15px
        }

        .uxc-header-nav .shopper-menu .shopper-header>a {
            display: inline;
            padding: 0 !important
        }

        .uxc-header-nav .dropdown-menu>li>a {
            font-size: 16px
        }

        .uxc-nowrap {
            white-space: nowrap
        }

        .uxh-cart-circle {
            position: relative;
            top: 5px;
            display: inline-block;
            height: 25px;
            min-width: 25px;
            padding: 0 5px;
            margin-top: 0;
            color: #FC7B1A;
            text-align: center;
            background-color: #FFF;
            border-radius: 50%
        }

        .uxh-cart-circle .uxh-cart-count {
            position: relative;
            top: 4px;
            font-style: normal;
            line-height: 1;
            vertical-align: top
        }

        @media (max-width:767px) {
            .navbar-right .uxh-logged-in>a {
                background-color: #f5f5f5
            }

            .navbar-right .uxh-logged-in>a:hover {
                color: #777;
                background-color: #eee
            }

            .navbar-collapse {
                clear: both
            }

            .uxc-header .dropdown-columns a {
                color: #eee
            }

            .uxc-header .dropdown-columns a:hover {
                color: #777;
                background-color: #eee
            }

            .navbar-nav {
                margin: 0 -15px
            }

            .uxc-header-nav .navbar-left>li {
                display: block
            }

            .uxc-header-nav .navbar-left>li a {
                display: block
            }

            .uxc-header-nav .navbar-left>li:before {
                content: none
            }
        }

        #uxh-nav-user-link>span {
            display: inline-block;
            vertical-align: top
        }

        .clearfix:before,
        .sf-clear:before,
        .clearfix:after,
        .sf-clear:after {
            display: table;
            content: " "
        }

        .clearfix:after,
        .sf-clear:after {
            clear: both
        }

        .pull-right {
            float: right !important
        }

        .pull-left {
            float: left !important
        }

        .show {
            display: block !important
        }

        .invisible {
            visibility: hidden
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0
        }

        .hidden {
            display: none !important;
            visibility: hidden !important
        }

        .affix {
            position: fixed
        }

        @-ms-viewport {
            width: device-width
        }

        @media screen and (max-width:400px) {
            @-ms-viewport {
                width: 320px
            }
        }

        .hidden {
            display: none !important;
            visibility: hidden !important
        }

        .visible-xs {
            display: none !important
        }

        tr.visible-xs {
            display: none !important
        }

        th.visible-xs,
        td.visible-xs {
            display: none !important
        }

        @media (max-width:767px) {
            .visible-xs {
                display: block !important
            }

            tr.visible-xs {
                display: table-row !important
            }

            th.visible-xs,
            td.visible-xs {
                display: table-cell !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .visible-xs.visible-sm {
                display: block !important
            }

            tr.visible-xs.visible-sm {
                display: table-row !important
            }

            th.visible-xs.visible-sm,
            td.visible-xs.visible-sm {
                display: table-cell !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .visible-xs.visible-md {
                display: block !important
            }

            tr.visible-xs.visible-md {
                display: table-row !important
            }

            th.visible-xs.visible-md,
            td.visible-xs.visible-md {
                display: table-cell !important
            }
        }

        @media (min-width:1200px) {
            .visible-xs.visible-lg {
                display: block !important
            }

            tr.visible-xs.visible-lg {
                display: table-row !important
            }

            th.visible-xs.visible-lg,
            td.visible-xs.visible-lg {
                display: table-cell !important
            }
        }

        .visible-sm {
            display: none !important
        }

        tr.visible-sm {
            display: none !important
        }

        th.visible-sm,
        td.visible-sm {
            display: none !important
        }

        @media (max-width:767px) {
            .visible-sm.visible-xs {
                display: block !important
            }

            tr.visible-sm.visible-xs {
                display: table-row !important
            }

            th.visible-sm.visible-xs,
            td.visible-sm.visible-xs {
                display: table-cell !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .visible-sm {
                display: block !important
            }

            tr.visible-sm {
                display: table-row !important
            }

            th.visible-sm,
            td.visible-sm {
                display: table-cell !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .visible-sm.visible-md {
                display: block !important
            }

            tr.visible-sm.visible-md {
                display: table-row !important
            }

            th.visible-sm.visible-md,
            td.visible-sm.visible-md {
                display: table-cell !important
            }
        }

        @media (min-width:1200px) {
            .visible-sm.visible-lg {
                display: block !important
            }

            tr.visible-sm.visible-lg {
                display: table-row !important
            }

            th.visible-sm.visible-lg,
            td.visible-sm.visible-lg {
                display: table-cell !important
            }
        }

        .visible-md {
            display: none !important
        }

        tr.visible-md {
            display: none !important
        }

        th.visible-md,
        td.visible-md {
            display: none !important
        }

        @media (max-width:767px) {
            .visible-md.visible-xs {
                display: block !important
            }

            tr.visible-md.visible-xs {
                display: table-row !important
            }

            th.visible-md.visible-xs,
            td.visible-md.visible-xs {
                display: table-cell !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .visible-md.visible-sm {
                display: block !important
            }

            tr.visible-md.visible-sm {
                display: table-row !important
            }

            th.visible-md.visible-sm,
            td.visible-md.visible-sm {
                display: table-cell !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .visible-md {
                display: block !important
            }

            tr.visible-md {
                display: table-row !important
            }

            th.visible-md,
            td.visible-md {
                display: table-cell !important
            }
        }

        @media (min-width:1200px) {
            .visible-md.visible-lg {
                display: block !important
            }

            tr.visible-md.visible-lg {
                display: table-row !important
            }

            th.visible-md.visible-lg,
            td.visible-md.visible-lg {
                display: table-cell !important
            }
        }

        .visible-lg {
            display: none !important
        }

        tr.visible-lg {
            display: none !important
        }

        th.visible-lg,
        td.visible-lg {
            display: none !important
        }

        @media (max-width:767px) {
            .visible-lg.visible-xs {
                display: block !important
            }

            tr.visible-lg.visible-xs {
                display: table-row !important
            }

            th.visible-lg.visible-xs,
            td.visible-lg.visible-xs {
                display: table-cell !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .visible-lg.visible-sm {
                display: block !important
            }

            tr.visible-lg.visible-sm {
                display: table-row !important
            }

            th.visible-lg.visible-sm,
            td.visible-lg.visible-sm {
                display: table-cell !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .visible-lg.visible-md {
                display: block !important
            }

            tr.visible-lg.visible-md {
                display: table-row !important
            }

            th.visible-lg.visible-md,
            td.visible-lg.visible-md {
                display: table-cell !important
            }
        }

        @media (min-width:1200px) {
            .visible-lg {
                display: block !important
            }

            tr.visible-lg {
                display: table-row !important
            }

            th.visible-lg,
            td.visible-lg {
                display: table-cell !important
            }
        }

        .hidden-xs {
            display: block !important
        }

        tr.hidden-xs {
            display: table-row !important
        }

        th.hidden-xs,
        td.hidden-xs {
            display: table-cell !important
        }

        @media (max-width:767px) {
            .hidden-xs {
                display: none !important
            }

            tr.hidden-xs {
                display: none !important
            }

            th.hidden-xs,
            td.hidden-xs {
                display: none !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .hidden-xs.hidden-sm {
                display: none !important
            }

            tr.hidden-xs.hidden-sm {
                display: none !important
            }

            th.hidden-xs.hidden-sm,
            td.hidden-xs.hidden-sm {
                display: none !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .hidden-xs.hidden-md {
                display: none !important
            }

            tr.hidden-xs.hidden-md {
                display: none !important
            }

            th.hidden-xs.hidden-md,
            td.hidden-xs.hidden-md {
                display: none !important
            }
        }

        @media (min-width:1200px) {
            .hidden-xs.hidden-lg {
                display: none !important
            }

            tr.hidden-xs.hidden-lg {
                display: none !important
            }

            th.hidden-xs.hidden-lg,
            td.hidden-xs.hidden-lg {
                display: none !important
            }
        }

        .hidden-sm {
            display: block !important
        }

        tr.hidden-sm {
            display: table-row !important
        }

        th.hidden-sm,
        td.hidden-sm {
            display: table-cell !important
        }

        @media (max-width:767px) {
            .hidden-sm.hidden-xs {
                display: none !important
            }

            tr.hidden-sm.hidden-xs {
                display: none !important
            }

            th.hidden-sm.hidden-xs,
            td.hidden-sm.hidden-xs {
                display: none !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .hidden-sm {
                display: none !important
            }

            tr.hidden-sm {
                display: none !important
            }

            th.hidden-sm,
            td.hidden-sm {
                display: none !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .hidden-sm.hidden-md {
                display: none !important
            }

            tr.hidden-sm.hidden-md {
                display: none !important
            }

            th.hidden-sm.hidden-md,
            td.hidden-sm.hidden-md {
                display: none !important
            }
        }

        @media (min-width:1200px) {
            .hidden-sm.hidden-lg {
                display: none !important
            }

            tr.hidden-sm.hidden-lg {
                display: none !important
            }

            th.hidden-sm.hidden-lg,
            td.hidden-sm.hidden-lg {
                display: none !important
            }
        }

        .hidden-md {
            display: block !important
        }

        tr.hidden-md {
            display: table-row !important
        }

        th.hidden-md,
        td.hidden-md {
            display: table-cell !important
        }

        @media (max-width:767px) {
            .hidden-md.hidden-xs {
                display: none !important
            }

            tr.hidden-md.hidden-xs {
                display: none !important
            }

            th.hidden-md.hidden-xs,
            td.hidden-md.hidden-xs {
                display: none !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .hidden-md.hidden-sm {
                display: none !important
            }

            tr.hidden-md.hidden-sm {
                display: none !important
            }

            th.hidden-md.hidden-sm,
            td.hidden-md.hidden-sm {
                display: none !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .hidden-md {
                display: none !important
            }

            tr.hidden-md {
                display: none !important
            }

            th.hidden-md,
            td.hidden-md {
                display: none !important
            }
        }

        @media (min-width:1200px) {
            .hidden-md.hidden-lg {
                display: none !important
            }

            tr.hidden-md.hidden-lg {
                display: none !important
            }

            th.hidden-md.hidden-lg,
            td.hidden-md.hidden-lg {
                display: none !important
            }
        }

        .hidden-lg {
            display: block !important
        }

        tr.hidden-lg {
            display: table-row !important
        }

        th.hidden-lg,
        td.hidden-lg {
            display: table-cell !important
        }

        @media (max-width:767px) {
            .hidden-lg.hidden-xs {
                display: none !important
            }

            tr.hidden-lg.hidden-xs {
                display: none !important
            }

            th.hidden-lg.hidden-xs,
            td.hidden-lg.hidden-xs {
                display: none !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .hidden-lg.hidden-sm {
                display: none !important
            }

            tr.hidden-lg.hidden-sm {
                display: none !important
            }

            th.hidden-lg.hidden-sm,
            td.hidden-lg.hidden-sm {
                display: none !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .hidden-lg.hidden-md {
                display: none !important
            }

            tr.hidden-lg.hidden-md {
                display: none !important
            }

            th.hidden-lg.hidden-md,
            td.hidden-lg.hidden-md {
                display: none !important
            }
        }

        @media (min-width:1200px) {
            .hidden-lg {
                display: none !important
            }

            tr.hidden-lg {
                display: none !important
            }

            th.hidden-lg,
            td.hidden-lg {
                display: none !important
            }
        }

        .visible-print {
            display: none !important
        }

        tr.visible-print {
            display: none !important
        }

        th.visible-print,
        td.visible-print {
            display: none !important
        }

        @media print {
            .visible-print {
                display: block !important
            }

            tr.visible-print {
                display: table-row !important
            }

            th.visible-print,
            td.visible-print {
                display: table-cell !important
            }

            .hidden-print {
                display: none !important
            }

            tr.hidden-print {
                display: none !important
            }

            th.hidden-print,
            td.hidden-print {
                display: none !important
            }
        }

        .sf-btn-file {
            position: relative;
            overflow: hidden
        }

        .sf-btn-file input {
            position: absolute;
            top: 0;
            right: 0;
            padding: 0;
            margin: 0;
            font-size: 100px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0)
        }

        .sf-menu-icns>li {
            position: relative
        }

        .sf-menu-icns>li>a {
            padding-left: 34px !important
        }

        .sf-menu-icn {
            position: absolute;
            top: 50%;
            left: 2px;
            display: block;
            width: 30px;
            height: 24px;
            margin-top: -12px
        }

        .sf-menu-icn.uxicon {
            position: absolute;
            line-height: 24px;
            text-align: center
        }

        .sf-menu-icn.uxicon,
        .sf-menu-icn.uxicon:hover,
        .sf-menu-icn.uxicon:focus {
            color: inherit
        }

        .sflayer {
            position: absolute;
            top: 0;
            left: 0;
            width: 1px;
            height: 1px
        }

        .sflayer-dialog {
            z-index: 150000000
        }

        .sflayer-flyout {
            z-index: 110000000
        }

        .sflayer-abstop {
            z-index: 2000000000
        }

        .sf_growl .close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff
        }

        #sf_growl {
            position: fixed;
            top: 40px;
            right: 40px;
            z-index: 100000;
            width: 280px
        }

        #sf_growl_close_all {
            position: relative;
            z-index: 100000;
            display: none;
            padding-bottom: 2px;
            margin-bottom: 5px;
            font-size: 11px;
            font-weight: 700;
            color: #fff;
            text-align: center;
            cursor: pointer;
            background: #000;
            background: rgba(0, 0, 0, .85)
        }

        .sf_growl_bg {
            position: relative;
            height: 100%;
            padding: 15px;
            margin-bottom: 5px;
            cursor: auto;
            background: #000;
            background: rgba(0, 0, 0, .85)
        }

        .sf_growl_msg {
            font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
            color: #fff;
            text-align: left;
            cursor: auto
        }

        .sf_growl_ico {
            float: left;
            margin-top: 2px;
            margin-right: 7px;
            font-size: 22px
        }

        .sf_growl_ico.uxicon-check-outline,
        .sf_growl_ico.uxicon-check-outline:hover,
        .sf_growl_ico.uxicon-check-outline:focus {
            color: #679b08
        }

        .sf_growl_ico.uxicon-alert,
        .sf_growl_ico.uxicon-alert:hover,
        .sf_growl_ico.uxicon-alert:focus {
            color: #f00000
        }

        .sf_growl_ico.uxicon-information,
        .sf_growl_ico.uxicon-information:hover,
        .sf_growl_ico.uxicon-information:focus {
            color: #ff8a00
        }

        .sf_growl_title {
            margin-bottom: 5px;
            font-size: 18px;
            color: inherit
        }

        .sf-tourpoint-nav {
            padding: 0;
            margin: 20px auto 0;
            text-align: center;
            list-style: none
        }

        .sf-tourpoint-nav li {
            display: inline-block;
            margin: 0 5px;
            cursor: default
        }

        .sf-tourpoint-nav li.disabled {
            cursor: default;
            opacity: .3;
            filter: alpha(opacity=30)
        }

        .sf-tourpoint-nav li .uxicon {
            color: #fff
        }

        .sf-tourpoint-nav li .uxicon:hover {
            color: #fff
        }

        .sf-tourpoint-nav .sf-tourpoint-nav-item .uxicon:before {
            content: "\e169"
        }

        .sf-tourpoint-nav .sf-tourpoint-nav-item.current .uxicon:before {
            content: "\e391"
        }

        .sf-tourpoint-nav .sf-tourpoint-nav-prev {
            cursor: pointer
        }

        .sf-tourpoint-nav .sf-tourpoint-nav-next {
            cursor: pointer
        }

        .sf-tabs-wiz-list {
            display: table;
            width: 100%;
            padding: 0;
            margin: 0;
            text-align: center;
            list-style: none;
            table-layout: fixed;
            counter-reset: wizList
        }

        .sf-tabs-wiz-list>li {
            display: table-cell;
            vertical-align: top;
            counter-increment: wizList
        }

        .sf-tabs-wiz-list>li>a {
            position: relative;
            display: block;
            font-size: 14px;
            color: #b3b3b3;
            text-decoration: none
        }

        .sf-tabs-wiz-list>li>a:before,
        .sf-tabs-wiz-list>li>a:after {
            position: absolute;
            top: 12px;
            display: block;
            height: 1px;
            background: #b3b3b3;
            content: "";
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box
        }

        .sf-tabs-wiz-list>li>a:before {
            right: 50%;
            left: 0
        }

        .sf-tabs-wiz-list>li>a:after {
            right: 0;
            left: 50%
        }

        .sf-tabs-wiz-list>li:first-child>a:before,
        .sf-tabs-wiz-list>li:last-child>a:after {
            display: none
        }

        .sf-tabs-wiz-txt {
            position: relative;
            display: block;
            padding-top: 36px
        }

        .sf-tabs-wiz-txt:before {
            position: absolute;
            top: 2px;
            left: 50%;
            z-index: 1;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-left: -10px;
            line-height: 20px;
            color: #b3b3b3;
            text-align: center;
            text-decoration: none;
            background: #fff;
            border: 1px solid #b3b3b3;
            border-radius: 100%;
            content: counter(wizList);
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box
        }

        .sf-tabs-wiz-step-current>a {
            font-size: 16px;
            color: #333
        }

        .sf-tabs-wiz-step-current>a>.sf-tabs-wiz-txt:before {
            top: 0;
            width: 24px;
            height: 24px;
            margin-left: -12px;
            line-height: 24px
        }

        .sf-tabs-wiz-step-current>a>.sf-tabs-wiz-txt:before,
        .sf-tabs-wiz-step-incomplete>a:hover>.sf-tabs-wiz-txt:before {
            color: #fff;
            background: #333;
            border: 1px solid #333
        }

        .sf-tabs-wiz-step-current>a:before {
            background: #727272
        }

        .sf-tabs-wiz-step-complete>a>.sf-tabs-wiz-txt:before {
            background: #727272;
            border: 1px solid #727272
        }

        .sf-tabs-wiz-step-complete>a:before,
        .sf-tabs-wiz-step-complete>a:after {
            background: #727272
        }

        .sf-dialog .sf-tabs-wiz-list>li>a {
            font-size: 12px
        }

        .sf-dialog .sf-tabs-wiz-step-current>a {
            font-size: 14px
        }

        .sf-dialog,
        .sf-dialog-overlay {
            display: none
        }

        .sf-dialog {
            width: 438px;
            overflow: hidden
        }

        .sf-dialog.sf-dialog-veil {
            margin-top: -1px;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .sf-dialog .close {
            position: absolute;
            top: 15px;
            right: 20px
        }

        .sf-dialog .sf-dialog-content {
            padding: 20px 20px 15px
        }

        .sf-dialog .nav-tabs,
        .sf-dialog .sf-tabs-wiz {
            padding: 25px 0 0;
            margin: 0 20px
        }

        .sf-dialog .nav-tabs+.sf-dialog-content,
        .sf-dialog .sf-tabs-wiz+.sf-dialog-content {
            padding-top: 15px
        }

        .sf-dialog .sf-dialog-title-hidden+div,
        .sf-dialog .sf-dialog-title-hidden+ul {
            padding-top: 50px
        }

        .sf-dialog .sf-dialog-buttons-left {
            text-align: left
        }

        .sf-dialog .sf-dialog-buttons-right {
            text-align: right
        }

        .sf-dialog-overlay {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            background-color: #fff;
            opacity: .8;
            filter: alpha(opacity=80)
        }

        .sf-dialog,
        .sf-dialog-title,
        .sf-dialog-content,
        .sf-dialog-inner,
        .sf-dialog-buttons {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box
        }

        .sf-dialog-wiz-title-steps {
            margin-left: 7px;
            font-size: 14px
        }

        .sf-flyout {
            display: none
        }

        .sf-flyout {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
            padding: 0;
            margin: 0;
            background-color: #fff
        }

        .sf-flyout-inner {
            position: relative;
            width: 100%;
            margin: 0;
            overflow: auto;
            border: 0
        }

        .sf-flyout-anchor-border,
        .sf-flyout-anchor-border-above {
            top: 0;
            left: 0;
            min-width: 15px;
            overflow-x: hidden;
            overflow-y: visible
        }

        .sf-flyout-origin {
            cursor: pointer
        }

        .sf-validator-criteria {
            padding-left: 30px;
            margin: 8px 0
        }

        .sf-validator-criteria:before,
        .sf-validator-criteria:after {
            display: table;
            content: " "
        }

        .sf-validator-criteria:after {
            clear: both
        }

        .sf-validator-criteria:before,
        .sf-validator-criteria:after {
            display: table;
            content: " "
        }

        .sf-validator-criteria:after {
            clear: both
        }

        .sf-validator-criteria span.uxicon {
            float: left;
            margin-top: 1px;
            margin-left: -30px;
            font-size: 20px
        }

        .sf-validator-criteria span.uxicon.text-danger:hover,
        .sf-validator-criteria span.uxicon.text-danger:focus {
            color: #f00000
        }

        .sf-validator-criteria span.uxicon.text-success:hover,
        .sf-validator-criteria span.uxicon.text-success:focus {
            color: #679b08
        }

        .sf-msg-overlay {
            position: absolute;
            top: 50%;
            right: 0;
            left: 0;
            padding: 25px 5%;
            margin-bottom: 12px;
            text-align: center;
            background-color: #FFF;
            border-top: 1px solid #b3b3b3;
            border-bottom: 1px solid #b3b3b3
        }

        .sf-msg-overlay-wrap {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 9999999;
            background: rgba(255, 255, 255, .8);
            filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#ddffffff,endColorstr=#ddffffff)'
        }

        :root .sf-msg-overlay-wrap {
            filter: none
        }

        .sf-msg-overlay-status {
            margin-right: 5px;
            vertical-align: middle
        }

        .ux-tel-control {
            position: relative
        }

        .ux-tel-control input {
            padding-left: 4.25em
        }

        .ux-tel-control .input-sm+.tel-menu-container .tel-menu-button {
            height: 24px;
            font-size: 12px;
            line-height: 24px
        }

        .ux-tel-control .input-lg+.tel-menu-container .tel-menu-button {
            height: 52px;
            font-size: 18px;
            line-height: 52px
        }

        .ux-tel-control .tel-menu-container {
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer
        }

        .ux-tel-control .tel-menu-container .tel-menu-button {
            width: 4em;
            height: 34px;
            margin: 1px 0 1px 1px;
            font-size: 14px;
            line-height: 34px;
            text-align: center
        }

        .ux-tel-control .tel-menu-container .tel-menu-button:hover {
            background-color: #eee
        }

        .ux-tel-control .tel-menu-container .tel-menu-button .tel-menu-button-label {
            margin-right: 6px
        }

        .ux-tel-control .tel-menu-container .tel-menu-items {
            z-index: 2;
            display: block;
            width: 330px;
            max-height: 200px;
            margin-top: -1px;
            overflow-y: scroll
        }

        .ux-tel-control .tel-menu-container .tel-menu-items.hide {
            display: none
        }

        .ux-tel-control .tel-menu-container .tel-menu-items .tel-menu-item .country-id,
        .ux-tel-control .tel-menu-container .tel-menu-items .tel-menu-item .country-name {
            margin-right: 6px
        }

        .ux-tel-control .tel-menu-container .tel-menu-items .tel-menu-item .dial-code {
            color: #727272
        }

        .ux-tel-control .tel-menu-container .tel-menu-items .tel-menu-item.active .dial-code {
            color: inherit
        }
    </style>
</head>

<body>
    <div id="error-img">
        <img
            src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAAyAAD/4QN0aHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjUtYzAxNCA3OS4xNTE0ODEsIDIwMTMvMDMvMTMtMTI6MDk6MTUgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6MDE4MDExNzQwNzIwNjgxMTgwODNFQjBFNzYyRjFCNzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Rjc2MDIxRkE1NkM3MTFFM0EzOTZCMUE0NDEwMDdGNTgiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Rjc2MDIxRjk1NkM3MTFFM0EzOTZCMUE0NDEwMDdGNTgiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OTlhZjE4MGYtMzc4Zi00YmU5LThhODctNzIyYWFjOTA0ZWJjIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjAxODAxMTc0MDcyMDY4MTE4MDgzRUIwRTc2MkYxQjc0Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+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" />
    </div>
    <div class="container text-center" id="error">
        <div class="row">
            <div class="col-md-12">
                <svg fill="#ff8a00" width="80" height="80" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <g>
                        <path d="M12 13.75a.75.75 0 00.75-.75V9a.75.75 0 10-1.5 0v4a.75.75 0 00.75.75z" />
                        <path d="M21.371 16.48L14.478 4.417a2.854 2.854 0 00-4.956 0L2.629 16.48a2.853 2.853 0 002.478 4.27h13.787a2.854 2.854 0 002.477-4.27zm-1.307 2.095a1.34 1.34 0 01-1.17.675H5.107a1.352 1.352 0 01-1.175-2.025l6.893-12.063a1.354 1.354 0 012.35 0l6.893 12.063a1.339 1.339 0 01-.004 1.35z" />
                        <path d="M12 15.25h-.005a1.128 1.128 0 10.005 0z" />
                    </g>
                </svg>
                <h1>Server Error</h1>
            </div>
        </div>
    </div>

</body>

</html>