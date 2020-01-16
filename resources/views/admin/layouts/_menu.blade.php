
    <ul class="sidebar-nav">
        <li class="sidebar-nav-link">
            <a href="/admin" class="{{$_admin ?? ''}}">
                <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="/admin/category" class="{{$_category ?? ''}}">
                <i class="am-icon-calendar sidebar-nav-link-logo"></i> 文章分类
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="/admin/article" class="{{$_article ?? ''}}">
                <i class="am-icon-book sidebar-nav-link-logo"></i> 文章管理
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="/admin/webset" class="{{$_web ?? ''}}">
                <i class="am-icon-wpforms sidebar-nav-link-logo"></i>站点管理

            </a>
        </li>

        <li class="sidebar-nav-link">
            <a href="/admin/ip" class="{{$_ip ?? ''}}">
                <i class="am-icon-wpforms sidebar-nav-link-logo"></i>访问日志

            </a>
        </li>
    </ul>
