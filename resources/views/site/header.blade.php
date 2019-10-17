      <!-- /.container --> <!-- nav -->

 @if(isset($menu))
   <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a  href="{{ route('pages', array('alias'=>$pages[0]->alias)) }}" class="navbar-brand">
                    <h1>SQUAD FREE</h1>
                </a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        @foreach($menu as $item)
            <li><a href="#{{ $item['alias'] }}">{{ $item['title'] }}</a></li>
        @endforeach
      
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    @endif