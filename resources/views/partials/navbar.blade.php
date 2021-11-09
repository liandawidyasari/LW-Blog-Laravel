  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #6B4F4F;">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">LW</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link {{ ($title === "Home") ? 'active' : '' }}"  href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="/posts">Posts</a></li>
                    </ul>
                    </ul>
                </div>
            </div>
        </nav>