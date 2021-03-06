<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage bmqy-next
 * @since bmqy next 1.1
 */
?>
<ul class="post-copyright">
    <li class="post-copyright-author">
        <strong>{{ __('post.copyright.author') + __('symbol.colon') }}</strong>
        {{ config.author }}
    </li>
    <li class="post-copyright-link">
        <strong>{{ __('post.copyright.link') + __('symbol.colon') }}</strong>
        <a href="{{ post.permalink }}" title="{{ post.title }}">{{ post.permalink }}</a>
    </li>
    <li class="post-copyright-license">
        <strong>{{ __('post.copyright.license_title') + __('symbol.colon') }} </strong>
        {{ __('post.copyright.license_content', theme.post_copyright.license_url, theme.post_copyright.license) }}
    </li>
</ul>