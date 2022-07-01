<div>
    <h2>@title</h2>
    <div>
        <div>
            @fields('erc_content')
            <div>
                <a href="#@sub('topic_title')">@sub('topic_title')</a>
            </div>
            @endfields
        </div>
        <div>
            @fields('erc_content')
            <div @hassub('topic_title')id="@sub('topic_title')" @endsub>
                <h4>@sub('topic_title')</h4>
                <p>@sub('topic_content')</p>
            </div>
            @endfields
        </div>
    </div>
</div>