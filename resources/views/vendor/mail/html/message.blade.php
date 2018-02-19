@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ config('app.name') }}
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
<td align="center" valign="top" id="templateFooter" data-template-container="">
                                    <!--[if (gte mso 9)|(IE)]>
									<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
									<tr>
									<td align="center" valign="top" width="600" style="width:600px;">
									<![endif]-->
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                        <tbody><tr>
                                            <td valign="top" class="footerContainer">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
                                                    <tbody class="mcnDividerBlockOuter">
                                                        <tr>
                                                            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                                                                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><span></span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!--            
                <td class="mcnDividerBlockInner" style="padding: 18px;">
                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
-->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                                                    <tbody class="mcnTextBlockOuter">
                                                        <tr>
                                                            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                                                                <!--[if mso]>
				<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
				<tr>
				<![endif]-->
                                                                <!--[if mso]>
				<td valign="top" width="600" style="width:600px;">
				<![endif]-->
                                                                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                                                                                <strong>DonatIQ</strong>
                                                                                <br>
                                                                                info@donatiq.com
                                                                                <br>
                                                                                Dmitri Nuzbroh
                                                                                <br>
                                                                                Wienerstr. 24 10999 Berlin
                                                                                <br>
                                                                                <a href="/impressum">Impressum</a> | <a href="/datenschutz">Datenschutz</a> 
                                                                                <br>
                                                                                <br>
                                                                                <a href="/user/dashboard">Account Einstellungen anpassen</a> oder 
                                                                                <a href="*|UNSUCRIBE|*">Newsletter abbestellen</a>.
                                                                                <br>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!--[if mso]>
				</td>
				<![endif]-->
                                                                <!--[if mso]>
				</tr>
				</table>
				<![endif]-->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <!--[if (gte mso 9)|(IE)]>
									</td>
									</tr>
									</table>
									<![endif]-->
                                </td>
