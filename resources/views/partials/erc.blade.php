    <div class="content row">
        <div class="px-5 col-12 col-md-3 col-sm-12">
            <p><strong>Topics in this article:</strong></p>
            @fields('erc_content_first')
            <div class="topic_list">
                <a href="#@sub('topic_title')">@sub('topic_title')</a>
            </div>
            @endfields
            @fields('erc_content_second')
            <div class="topic_list">
                <a href="#@sub('topic_title')">@sub('topic_title')</a>
            </div>
            @endfields
        </div>
        <div class="col-12 col-md-9 col-sm-12">
            @fields('erc_content_first')
            <div class="topic col-12 col-md-8 col-sm-12" @hassub('topic_title')id="@sub('topic_title')" @endsub>
                <h2>@sub('topic_title')</h2>
                <p>@sub('topic_content')</p>
            </div>
            @endfields
            @group('banner')
            <div class="banner" style="background-image:url(@sub('background_image', 'url')); background-size: cover;">
                <h3>@sub('cta_text')</h3>
                <div class="btn">
                    <span>@sub('btn_text')</span>
                    <a href="@sub('btn_url')"></a>
                </div>
            </div>
            @endgroup

            @fields('erc_content_second')
            <div class="topic col-12 col-md-8 col-sm-12" @hassub('topic_title')id="@sub('topic_title')" @endsub>
                <h2>@sub('topic_title')</h2>
                <p>@sub('topic_content')</p>
            </div>
            @endfields

        </div>
    </div>