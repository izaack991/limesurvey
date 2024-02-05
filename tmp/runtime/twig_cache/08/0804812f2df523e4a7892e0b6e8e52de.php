<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ./ls_logo_svg.twig */
class __TwigTemplate_8a66e1030dfc2bd46ba10fe168a65672 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<svg class=\"ls-logo\"  viewBox=\"0 0 181 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.90266 5.45549C6.39808 5.48742 7.87852 5.77592 9.28559 6.30963C10.6926 6.82561 12.0528 7.47323 13.3499 8.2447C14.6388 9.00242 15.881 9.84508 17.0688 10.7677C17.4586 11.0719 17.8424 11.3803 18.2216 11.6969C18.5464 11.3595 18.8755 11.0295 19.2088 10.707C19.6931 10.2399 20.1959 9.78686 20.6981 9.34742C20.954 9.13006 21.2093 8.91328 21.4652 8.69945L21.851 8.38195L22.2457 8.07505C23.2955 7.25036 24.3857 6.48929 25.5071 5.77771C26.6286 5.06612 27.786 4.42817 28.9657 3.83793C31.3266 2.66289 33.804 1.76676 36.3525 1.16594C37.6252 0.872812 38.9145 0.666212 40.2125 0.547428C41.5135 0.423944 42.8224 0.42079 44.124 0.538003C43.7551 0.805308 43.382 1.04476 43.0117 1.28236L43.0115 1.28245C42.8327 1.3972 42.6545 1.51153 42.4778 1.62836C42.2085 1.80507 41.9353 1.98179 41.6615 2.14732L41.6376 2.1624C41.5111 2.24221 41.3842 2.32231 41.2578 2.4071L40.8541 2.66687C40.1685 3.10077 39.494 3.53924 38.8247 3.97428C38.4472 4.21963 38.0714 4.46389 37.6963 4.70562C35.6246 6.06517 33.614 7.42885 31.6448 8.83553C29.6756 10.2422 27.7552 11.6813 25.8778 13.1728C25.7208 13.2999 25.5633 13.4259 25.4058 13.5519L25.4055 13.5521L25.405 13.5525C25.0947 13.8007 24.7843 14.049 24.478 14.3056C24.1647 14.5561 23.8571 14.8157 23.5503 15.0746L23.55 15.0748L23.5498 15.075C23.4001 15.2014 23.2506 15.3275 23.1007 15.4525C23.0057 15.5346 22.9107 15.6165 22.8159 15.6983L22.8157 15.6985C22.4583 16.0068 22.1029 16.3134 21.7569 16.6229C21.6381 16.7301 21.5196 16.8357 21.4017 16.9406L21.4015 16.9408L21.401 16.9412C21.3007 17.0305 21.2008 17.1194 21.1018 17.2085L20.5094 17.7557L18.0067 20.063L16.3785 17.7657C16.3471 17.7186 16.2889 17.6479 16.2396 17.589L16.0828 17.3905L15.7642 16.9893L15.1136 16.1823C14.6739 15.6443 14.2297 15.1079 13.7811 14.573C12.8852 13.5062 11.9731 12.4447 11.0375 11.4015C10.1019 10.3583 9.14898 9.32975 8.14395 8.33365C7.1237 7.30167 6.041 6.34027 4.90266 5.45549ZM19.6102 40.3559C17.3913 40.3536 15.2172 39.737 13.3328 38.5754C11.4484 37.4139 9.92874 35.7536 8.94502 33.7817L1.85366 36.8077C3.95889 41.2615 7.68852 44.7588 12.2911 46.5948C16.8936 48.4308 22.027 48.469 26.6569 46.7018L23.6092 39.6716C22.3257 40.1256 20.9729 40.357 19.6102 40.3559ZM9.24702 22.7652C8.24123 24.5329 7.71203 26.5278 7.71051 28.5574C7.71022 29.8015 7.90887 31.0377 8.29907 32.22L1.19445 35.246C-0.298664 31.2011 -0.394613 26.7792 0.921669 22.6744C2.23795 18.5696 4.89193 15.0144 8.46691 12.567L13.4525 18.4657C11.7012 19.5167 10.2528 20.9975 9.24702 22.7652ZM31.4388 13.0627L24.7814 17.9345C27.0245 19.0163 28.8722 20.7639 30.0679 22.9343L37.1681 19.9083C35.8135 17.2208 33.8531 14.8785 31.4388 13.0627ZM37.8631 21.4544C38.763 23.7169 39.2238 26.1275 39.2213 28.5596C39.2178 32.1993 38.1851 35.7652 36.2403 38.8523C34.2956 41.9394 31.5167 44.424 28.2193 46.0241L25.1672 38.989C27.717 37.6543 29.6912 35.4471 30.7228 32.7776C31.7545 30.1082 31.7735 27.1582 30.7762 24.476L37.8631 21.4544Z\" fill=\"#14AE5C\"/>
<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.90266 5.45549C6.39808 5.48742 7.87852 5.77592 9.28559 6.30963C10.6926 6.82561 12.0528 7.47323 13.3499 8.2447C14.6388 9.00242 15.881 9.84508 17.0688 10.7677C17.4586 11.0719 17.8424 11.3803 18.2216 11.6969C18.5464 11.3595 18.8755 11.0295 19.2088 10.707C19.6931 10.2399 20.1959 9.78686 20.6981 9.34742C20.954 9.13006 21.2093 8.91328 21.4652 8.69945L21.851 8.38195L22.2457 8.07505C23.2955 7.25036 24.3857 6.48929 25.5071 5.77771C26.6286 5.06612 27.786 4.42817 28.9657 3.83793C31.3266 2.66289 33.804 1.76676 36.3525 1.16594C37.6252 0.872812 38.9145 0.666212 40.2125 0.547428C41.5135 0.423944 42.8224 0.42079 44.124 0.538003C43.7551 0.805308 43.382 1.04476 43.0117 1.28236L43.0115 1.28245C42.8327 1.3972 42.6545 1.51153 42.4778 1.62836C42.2085 1.80507 41.9353 1.98179 41.6615 2.14732L41.6376 2.1624C41.5111 2.24221 41.3842 2.32231 41.2578 2.4071L40.8541 2.66687C40.1685 3.10077 39.494 3.53924 38.8247 3.97428C38.4472 4.21963 38.0714 4.46389 37.6963 4.70562C35.6246 6.06517 33.614 7.42885 31.6448 8.83553C29.6756 10.2422 27.7552 11.6813 25.8778 13.1728C25.7208 13.2999 25.5633 13.4259 25.4058 13.5519L25.4055 13.5521L25.405 13.5525C25.0947 13.8007 24.7843 14.049 24.478 14.3056C24.1647 14.5561 23.8571 14.8157 23.5503 15.0746L23.55 15.0748L23.5498 15.075C23.4001 15.2014 23.2506 15.3275 23.1007 15.4525C23.0057 15.5346 22.9107 15.6165 22.8159 15.6983L22.8157 15.6985C22.4583 16.0068 22.1029 16.3134 21.7569 16.6229C21.6381 16.7301 21.5196 16.8357 21.4017 16.9406L21.4015 16.9408L21.401 16.9412C21.3007 17.0305 21.2008 17.1194 21.1018 17.2085L20.5094 17.7557L18.0067 20.063L16.3785 17.7657C16.3471 17.7186 16.2889 17.6479 16.2396 17.589L16.0828 17.3905L15.7642 16.9893L15.1136 16.1823C14.6739 15.6443 14.2297 15.1079 13.7811 14.573C12.8852 13.5062 11.9731 12.4447 11.0375 11.4015C10.1019 10.3583 9.14898 9.32975 8.14395 8.33365C7.1237 7.30167 6.041 6.34027 4.90266 5.45549ZM19.6102 40.3559C17.3913 40.3536 15.2172 39.737 13.3328 38.5754C11.4484 37.4139 9.92874 35.7536 8.94502 33.7817L1.85366 36.8077C3.95889 41.2615 7.68852 44.7588 12.2911 46.5948C16.8936 48.4308 22.027 48.469 26.6569 46.7018L23.6092 39.6716C22.3257 40.1256 20.9729 40.357 19.6102 40.3559ZM9.24702 22.7652C8.24123 24.5329 7.71203 26.5278 7.71051 28.5574C7.71022 29.8015 7.90887 31.0377 8.29907 32.22L1.19445 35.246C-0.298664 31.2011 -0.394613 26.7792 0.921669 22.6744C2.23795 18.5696 4.89193 15.0144 8.46691 12.567L13.4525 18.4657C11.7012 19.5167 10.2528 20.9975 9.24702 22.7652ZM31.4388 13.0627L24.7814 17.9345C27.0245 19.0163 28.8722 20.7639 30.0679 22.9343L37.1681 19.9083C35.8135 17.2208 33.8531 14.8785 31.4388 13.0627ZM37.8631 21.4544C38.763 23.7169 39.2238 26.1275 39.2213 28.5596C39.2178 32.1993 38.1851 35.7652 36.2403 38.8523C34.2956 41.9394 31.5167 44.424 28.2193 46.0241L25.1672 38.989C27.717 37.6543 29.6912 35.4471 30.7228 32.7776C31.7545 30.1082 31.7735 27.1582 30.7762 24.476L37.8631 21.4544Z\" fill=\"#14AE5C\"/>
<path d=\"M50 35.9151V21.7594H53.2477V33.2457H60.2844V35.9151H50Z\" fill=\"#14AE5C\"/>
<path d=\"M61.8981 35.9151V25.0354H65.0256V35.9151H61.8981ZM63.4618 23.5187C62.8871 23.5187 62.4194 23.3502 62.0585 23.0131C61.6976 22.6761 61.5172 22.2582 61.5172 21.7594C61.5172 21.2605 61.6976 20.8426 62.0585 20.5056C62.4194 20.1685 62.8871 20 63.4618 20C64.0365 20 64.5043 20.1618 64.8652 20.4853C65.226 20.7954 65.4065 21.1999 65.4065 21.6987C65.4065 22.2245 65.226 22.6626 64.8652 23.0131C64.5177 23.3502 64.0499 23.5187 63.4618 23.5187Z\" fill=\"#14AE5C\"/>
<path d=\"M81.7409 24.8736C82.5963 24.8736 83.3514 25.0489 84.0063 25.3994C84.6746 25.7364 85.1958 26.2622 85.57 26.9767C85.9576 27.6778 86.1514 28.5811 86.1514 29.6866V35.9151H83.024V30.1719C83.024 29.2956 82.8435 28.6485 82.4827 28.2305C82.1218 27.8126 81.614 27.6036 80.9591 27.6036C80.5047 27.6036 80.097 27.7115 79.7362 27.9272C79.3753 28.1294 79.0946 28.4395 78.8942 28.8574C78.6937 29.2754 78.5934 29.8079 78.5934 30.455V35.9151H75.466V30.1719C75.466 29.2956 75.2856 28.6485 74.9247 28.2305C74.5772 27.8126 74.076 27.6036 73.4211 27.6036C72.9667 27.6036 72.5591 27.7115 72.1982 27.9272C71.8374 28.1294 71.5567 28.4395 71.3562 28.8574C71.1558 29.2754 71.0555 29.8079 71.0555 30.455V35.9151H67.9281V25.0354H70.9152V28.0081L70.3538 27.1385C70.7281 26.397 71.256 25.8375 71.9376 25.4601C72.6326 25.0691 73.4211 24.8736 74.3032 24.8736C75.2923 24.8736 76.1543 25.1298 76.8894 25.6421C77.6378 26.1409 78.1323 26.9093 78.3729 27.9474L77.2703 27.6441C77.6312 26.7947 78.2059 26.1207 78.9944 25.6218C79.7963 25.123 80.7118 24.8736 81.7409 24.8736Z\" fill=\"#14AE5C\"/>
<path d=\"M94.3857 36.0768C93.1561 36.0768 92.0735 35.8342 91.1379 35.3488C90.2158 34.8635 89.5007 34.2029 88.9928 33.367C88.485 32.5177 88.231 31.5538 88.231 30.4752C88.231 29.3832 88.4783 28.4193 88.9728 27.5834C89.4807 26.7341 90.169 26.0735 91.0377 25.6016C91.9064 25.1163 92.8888 24.8736 93.9847 24.8736C95.0406 24.8736 95.9895 25.1028 96.8315 25.5612C97.6868 26.0061 98.3618 26.6532 98.8563 27.5025C99.3508 28.3384 99.5981 29.3428 99.5981 30.5157C99.5981 30.637 99.5914 30.7786 99.578 30.9403C99.5646 31.0886 99.5513 31.2302 99.5379 31.365H90.7771V29.5248H97.894L96.6911 30.0708C96.6911 29.5045 96.5775 29.0125 96.3503 28.5945C96.1231 28.1766 95.8091 27.8531 95.4081 27.6239C95.0071 27.3812 94.5394 27.2599 94.0048 27.2599C93.4702 27.2599 92.9957 27.3812 92.5814 27.6239C92.1804 27.8531 91.8663 28.1833 91.6391 28.6148C91.4119 29.0327 91.2983 29.5315 91.2983 30.1112V30.5966C91.2983 31.1898 91.4253 31.7155 91.6792 32.1739C91.9465 32.6188 92.3141 32.9626 92.7819 33.2053C93.263 33.4344 93.8243 33.549 94.4659 33.549C95.0406 33.549 95.5417 33.4614 95.9694 33.2861C96.4105 33.1109 96.8114 32.848 97.1723 32.4975L98.8362 34.3175C98.3417 34.8837 97.7203 35.3219 96.9718 35.632C96.2234 35.9285 95.3613 36.0768 94.3857 36.0768Z\" fill=\"#14AE5C\"/>
<path d=\"M106.512 36.1577C105.389 36.1577 104.313 36.0094 103.284 35.7128C102.255 35.4028 101.426 35.0051 100.798 34.5197L101.901 32.0526C102.502 32.484 103.21 32.8413 104.026 33.1244C104.854 33.394 105.69 33.5288 106.532 33.5288C107.173 33.5288 107.688 33.4682 108.075 33.3468C108.476 33.212 108.77 33.03 108.957 32.8008C109.145 32.5716 109.238 32.3087 109.238 32.0121C109.238 31.6346 109.091 31.3381 108.797 31.1223C108.503 30.8932 108.115 30.7112 107.634 30.5763C107.153 30.428 106.619 30.2932 106.031 30.1719C105.456 30.0371 104.874 29.8753 104.286 29.6866C103.712 29.4978 103.184 29.2551 102.703 28.9585C102.221 28.6619 101.827 28.271 101.52 27.7856C101.226 27.3003 101.079 26.6801 101.079 25.9252C101.079 25.1163 101.293 24.3815 101.72 23.7209C102.161 23.0468 102.816 22.5143 103.685 22.1234C104.567 21.7189 105.67 21.5167 106.993 21.5167C107.875 21.5167 108.744 21.6245 109.599 21.8402C110.454 22.0425 111.21 22.3525 111.864 22.7705L110.862 25.2578C110.207 24.8804 109.552 24.604 108.897 24.4287C108.242 24.24 107.601 24.1456 106.973 24.1456C106.345 24.1456 105.83 24.2198 105.429 24.368C105.028 24.5163 104.741 24.7118 104.567 24.9545C104.393 25.1837 104.306 25.4533 104.306 25.7634C104.306 26.1274 104.453 26.424 104.747 26.6532C105.042 26.8689 105.429 27.0442 105.91 27.179C106.391 27.3138 106.919 27.4486 107.494 27.5834C108.082 27.7182 108.663 27.8733 109.238 28.0485C109.826 28.2238 110.361 28.4597 110.842 28.7563C111.323 29.0529 111.711 29.4439 112.005 29.9292C112.312 30.4146 112.466 31.028 112.466 31.7695C112.466 32.5649 112.245 33.2929 111.804 33.9535C111.363 34.6141 110.702 35.1466 109.82 35.5511C108.951 35.9555 107.848 36.1577 106.512 36.1577Z\" fill=\"#14AE5C\"/>
<path d=\"M119.015 36.0768C118.12 36.0768 117.318 35.9016 116.61 35.5511C115.915 35.2005 115.373 34.668 114.986 33.9535C114.598 33.2255 114.404 32.302 114.404 31.183V25.0354H117.532V30.7179C117.532 31.6212 117.719 32.2885 118.093 32.7199C118.481 33.1378 119.022 33.3468 119.717 33.3468C120.198 33.3468 120.626 33.2457 121 33.0435C121.374 32.8278 121.668 32.5042 121.882 32.0728C122.096 31.6279 122.203 31.0752 122.203 30.4146V25.0354H125.33V35.9151H122.363V32.9221L122.905 33.7917C122.544 34.5467 122.009 35.1196 121.301 35.5106C120.606 35.8881 119.844 36.0768 119.015 36.0768Z\" fill=\"#14AE5C\"/>
<path d=\"M128.228 35.9151V25.0354H131.215V28.1092L130.794 27.2194C131.115 26.451 131.629 25.8713 132.337 25.4803C133.046 25.0758 133.908 24.8736 134.924 24.8736V27.7856C134.79 27.7722 134.67 27.7654 134.563 27.7654C134.456 27.7519 134.342 27.7452 134.222 27.7452C133.367 27.7452 132.672 27.9946 132.137 28.4934C131.616 28.9788 131.355 29.7405 131.355 30.7786V35.9151H128.228Z\" fill=\"#14AE5C\"/>
<path d=\"M140.082 35.9151L135.551 25.0354H138.779L142.548 34.3984H140.944L144.853 25.0354H147.861L143.31 35.9151H140.082Z\" fill=\"#14AE5C\"/>
<path d=\"M154.196 36.0768C152.966 36.0768 151.884 35.8342 150.948 35.3488C150.026 34.8635 149.311 34.2029 148.803 33.367C148.295 32.5177 148.041 31.5538 148.041 30.4752C148.041 29.3832 148.288 28.4193 148.783 27.5834C149.291 26.7341 149.979 26.0735 150.848 25.6016C151.717 25.1163 152.699 24.8736 153.795 24.8736C154.851 24.8736 155.8 25.1028 156.642 25.5612C157.497 26.0061 158.172 26.6532 158.666 27.5025C159.161 28.3384 159.408 29.3428 159.408 30.5157C159.408 30.637 159.402 30.7786 159.388 30.9403C159.375 31.0886 159.361 31.2302 159.348 31.365H150.587V29.5248H157.704L156.501 30.0708C156.501 29.5045 156.388 29.0125 156.16 28.5945C155.933 28.1766 155.619 27.8531 155.218 27.6239C154.817 27.3812 154.35 27.2599 153.815 27.2599C153.28 27.2599 152.806 27.3812 152.392 27.6239C151.991 27.8531 151.676 28.1833 151.449 28.6148C151.222 29.0327 151.108 29.5315 151.108 30.1112V30.5966C151.108 31.1898 151.235 31.7155 151.489 32.1739C151.757 32.6188 152.124 32.9626 152.592 33.2053C153.073 33.4344 153.634 33.549 154.276 33.549C154.851 33.549 155.352 33.4614 155.78 33.2861C156.221 33.1109 156.622 32.848 156.982 32.4975L158.646 34.3175C158.152 34.8837 157.53 35.3219 156.782 35.632C156.034 35.9285 155.171 36.0768 154.196 36.0768Z\" fill=\"#14AE5C\"/>
<path d=\"M162.658 40C162.096 40 161.542 39.9124 160.994 39.7371C160.446 39.5618 159.998 39.3192 159.651 39.0091L160.793 36.7644C161.034 36.9801 161.308 37.1486 161.615 37.27C161.936 37.3913 162.25 37.452 162.558 37.452C162.999 37.452 163.346 37.3441 163.6 37.1284C163.867 36.9262 164.108 36.5824 164.322 36.0971L164.883 34.7624L165.124 34.4186L168.993 25.0354H172L167.128 36.5824C166.781 37.4587 166.38 38.1463 165.926 38.6451C165.485 39.1439 164.99 39.4944 164.442 39.6967C163.907 39.8989 163.313 40 162.658 40ZM164.502 36.3397L159.691 25.0354H162.918L166.647 34.1355L164.502 36.3397Z\" fill=\"#14AE5C\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "./ls_logo_svg.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./ls_logo_svg.twig", "C:\\xampp\\htdocs\\limesurvey\\themes\\survey\\fruity_twentythree\\views\\ls_logo_svg.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
