<aside class="dashboard-sidebar" id="sidebar">
    <a href="./index.html" class="logo d-block">
      <img src="{{ asset('frontend') }}/./assets/images/favicon.png" alt="logo" />
    </a>
    <div class="dashboard-sidebar-menu-wrapper">
      <nav class="dashboard-sidebar-menu">
        
        @if (auth()->user()->user_type=='client')
        <a href="{{ route('client.dashboard') }}" class="menu-item active">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            class="menu-item-svg"
          >
            <path
              d="M21 14H14V21H21V14Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M10 14H3V21H10V14Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M21 3H14V10H21V3Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M10 3H3V10H10V3Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          Overview</a
        >
        
        <a href="./dashboard-new-campaigns.html" class="menu-item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            class="menu-item-svg"
          >
            <path
              d="M22 19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H9L11 6H20C20.5304 6 21.0391 6.21071 21.4142 6.58579C21.7893 6.96086 22 7.46957 22 8V19Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M12 11V17"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M9 14H15"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          Start New Campaign</a
        >
        <a href="./dashboard-invoice.html" class="menu-item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            class="menu-item-svg"
          >
            <path
              d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M14 2V8H20"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M16 13H8"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M16 17H8"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M10 9H9H8"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          Invoice</a
        >
        @endif

        @if (auth()->user()->user_type == 'owner')
        <a href="{{ route('owner.dashboard') }}" class="menu-item active">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            class="menu-item-svg"
          >
            <path
              d="M21 14H14V21H21V14Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M10 14H3V21H10V14Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M21 3H14V10H21V3Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M10 3H3V10H10V3Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          Overview</a
        >
        <a href="{{ route('owner.add_signage') }}" class="menu-item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            class="menu-item-svg"
          >
            <path
              d="M22 19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21H4C3.46957 21 2.96086 20.7893 2.58579 20.4142C2.21071 20.0391 2 19.5304 2 19V5C2 4.46957 2.21071 3.96086 2.58579 3.58579C2.96086 3.21071 3.46957 3 4 3H9L11 6H20C20.5304 6 21.0391 6.21071 21.4142 6.58579C21.7893 6.96086 22 7.46957 22 8V19Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M12 11V17"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M9 14H15"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          Add a New Singage</a
        >
        <a href="./dashboard-invoice.html" class="menu-item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            class="menu-item-svg"
          >
            <path
              d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M14 2V8H20"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M16 13H8"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M16 17H8"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M10 9H9H8"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          Income Statement</a
        >
        @endif

        @if (auth()->user()->user_type=='admin')
        <a href="{{ route('admin.dashboard') }}" class="menu-item active">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            class="menu-item-svg"
          >
            <path
              d="M21 14H14V21H21V14Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M10 14H3V21H10V14Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M21 3H14V10H21V3Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M10 3H3V10H10V3Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          Overview</a
        >
        <a href="./dashboard-admin-document.html " class="menu-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="menu-item-svg">
            <path d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M14 2V8H20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M16 13H8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M16 17H8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M10 9H9H8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
          Documents</a>

          <a href="./dashboard-admin-request.html" class="menu-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="menu-item-svg">
              <path d="M17 1L21 5L17 9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M3 11V9C3 7.93913 3.42143 6.92172 4.17157 6.17157C4.92172 5.42143 5.93913 5 7 5H21" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M7 23L3 19L7 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M21 13V15C21 16.0609 20.5786 17.0783 19.8284 17.8284C19.0783 18.5786 18.0609 19 17 19H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            Request</a>

            <a href="./dashboard-admin-request.html" class="menu-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="menu-item-svg">
                <path d="M17 1L21 5L17 9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M3 11V9C3 7.93913 3.42143 6.92172 4.17157 6.17157C4.92172 5.42143 5.93913 5 7 5H21" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M7 23L3 19L7 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M21 13V15C21 16.0609 20.5786 17.0783 19.8284 17.8284C19.0783 18.5786 18.0609 19 17 19H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
              Video Upload</a>
        @endif
        
      </nav>
      <div class="sidebar-footer">
        <a href="./dashboard-tutorials.html" class="menu-item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon-tutorial-video"
          >
            <rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect>
            <polygon points="10 9 16 12 10 15 10 9"></polygon>
          </svg>
          Tutorials
        </a>
        <a href="#" class="menu-item">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            class="menu-item-svg"
          >
            <path
              d="M12.0009 14.3465C13.2969 14.3465 14.3475 13.2959 14.3475 11.9999C14.3475 10.7039 13.2969 9.65332 12.0009 9.65332C10.7049 9.65332 9.6543 10.7039 9.6543 11.9999C9.6543 13.2959 10.7049 14.3465 12.0009 14.3465Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
            <path
              d="M18.0545 14.4545C17.9456 14.7013 17.9131 14.9751 17.9613 15.2405C18.0094 15.5059 18.1359 15.7508 18.3245 15.9436L18.3736 15.9927C18.5258 16.1447 18.6465 16.3252 18.7288 16.5238C18.8112 16.7225 18.8536 16.9354 18.8536 17.1505C18.8536 17.3655 18.8112 17.5784 18.7288 17.7771C18.6465 17.9757 18.5258 18.1562 18.3736 18.3082C18.2217 18.4603 18.0412 18.581 17.8425 18.6634C17.6439 18.7457 17.431 18.7881 17.2159 18.7881C17.0009 18.7881 16.7879 18.7457 16.5893 18.6634C16.3906 18.581 16.2102 18.4603 16.0582 18.3082L16.0091 18.2591C15.8163 18.0705 15.5714 17.9439 15.3059 17.8958C15.0405 17.8477 14.7668 17.8802 14.52 17.9891C14.278 18.0928 14.0716 18.265 13.9263 18.4845C13.7809 18.704 13.7029 18.9613 13.7018 19.2245V19.3636C13.7018 19.7976 13.5294 20.2138 13.2225 20.5207C12.9157 20.8276 12.4994 21 12.0655 21C11.6315 21 11.2152 20.8276 10.9084 20.5207C10.6015 20.2138 10.4291 19.7976 10.4291 19.3636V19.29C10.4228 19.0192 10.3351 18.7565 10.1775 18.5362C10.0199 18.3159 9.79969 18.1481 9.54545 18.0545C9.29868 17.9456 9.02493 17.9131 8.75952 17.9613C8.4941 18.0094 8.24919 18.1359 8.05636 18.3245L8.00727 18.3736C7.8553 18.5258 7.67483 18.6465 7.47617 18.7288C7.27752 18.8112 7.06459 18.8536 6.84955 18.8536C6.6345 18.8536 6.42157 18.8112 6.22292 18.7288C6.02426 18.6465 5.84379 18.5258 5.69182 18.3736C5.53967 18.2217 5.41898 18.0412 5.33663 17.8425C5.25428 17.6439 5.21189 17.431 5.21189 17.2159C5.21189 17.0009 5.25428 16.7879 5.33663 16.5893C5.41898 16.3906 5.53967 16.2102 5.69182 16.0582L5.74091 16.0091C5.92953 15.8163 6.05606 15.5714 6.10419 15.3059C6.15231 15.0405 6.11982 14.7668 6.01091 14.52C5.90719 14.278 5.73498 14.0716 5.51547 13.9263C5.29596 13.7809 5.03873 13.7029 4.77545 13.7018H4.63636C4.20237 13.7018 3.78616 13.5294 3.47928 13.2225C3.1724 12.9157 3 12.4994 3 12.0655C3 11.6315 3.1724 11.2152 3.47928 10.9084C3.78616 10.6015 4.20237 10.4291 4.63636 10.4291H4.71C4.98081 10.4228 5.24346 10.3351 5.46379 10.1775C5.68412 10.0199 5.85195 9.79969 5.94545 9.54545C6.05437 9.29868 6.08686 9.02493 6.03873 8.75952C5.99061 8.4941 5.86408 8.24919 5.67545 8.05636L5.62636 8.00727C5.47422 7.8553 5.35352 7.67483 5.27118 7.47617C5.18883 7.27752 5.14644 7.06459 5.14644 6.84955C5.14644 6.6345 5.18883 6.42157 5.27118 6.22292C5.35352 6.02426 5.47422 5.84379 5.62636 5.69182C5.77834 5.53967 5.95881 5.41898 6.15746 5.33663C6.35611 5.25428 6.56905 5.21189 6.78409 5.21189C6.99913 5.21189 7.21207 5.25428 7.41072 5.33663C7.60937 5.41898 7.78984 5.53967 7.94182 5.69182L7.99091 5.74091C8.18374 5.92953 8.42865 6.05606 8.69406 6.10419C8.95948 6.15231 9.23322 6.11982 9.48 6.01091H9.54545C9.78745 5.90719 9.99383 5.73498 10.1392 5.51547C10.2846 5.29596 10.3626 5.03873 10.3636 4.77545V4.63636C10.3636 4.20237 10.536 3.78616 10.8429 3.47928C11.1498 3.1724 11.566 3 12 3C12.434 3 12.8502 3.1724 13.1571 3.47928C13.464 3.78616 13.6364 4.20237 13.6364 4.63636V4.71C13.6374 4.97328 13.7154 5.23051 13.8608 5.45002C14.0062 5.66953 14.2126 5.84174 14.4545 5.94545C14.7013 6.05437 14.9751 6.08686 15.2405 6.03873C15.5059 5.99061 15.7508 5.86408 15.9436 5.67545L15.9927 5.62636C16.1447 5.47422 16.3252 5.35352 16.5238 5.27118C16.7225 5.18883 16.9354 5.14644 17.1505 5.14644C17.3655 5.14644 17.5784 5.18883 17.7771 5.27118C17.9757 5.35352 18.1562 5.47422 18.3082 5.62636C18.4603 5.77834 18.581 5.95881 18.6634 6.15746C18.7457 6.35611 18.7881 6.56905 18.7881 6.78409C18.7881 6.99913 18.7457 7.21207 18.6634 7.41072C18.581 7.60937 18.4603 7.78984 18.3082 7.94182L18.2591 7.99091C18.0705 8.18374 17.9439 8.42865 17.8958 8.69406C17.8477 8.95948 17.8802 9.23322 17.9891 9.48V9.54545C18.0928 9.78745 18.265 9.99383 18.4845 10.1392C18.704 10.2846 18.9613 10.3626 19.2245 10.3636H19.3636C19.7976 10.3636 20.2138 10.536 20.5207 10.8429C20.8276 11.1498 21 11.566 21 12C21 12.434 20.8276 12.8502 20.5207 13.1571C20.2138 13.464 19.7976 13.6364 19.3636 13.6364H19.29C19.0267 13.6374 18.7695 13.7154 18.55 13.8608C18.3305 14.0062 18.1583 14.2126 18.0545 14.4545V14.4545Z"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          Settings</a
        >
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <x-responsive-nav-link 
          onclick="event.preventDefault();
                      this.closest('form').submit();" class="menu-item">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              viewBox="0 0 20 20"
              fill="none"
              class="menu-item-svg"
            >
              <path
                d="M8.33398 14.1663L12.5007 9.99967L8.33398 5.83301"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M12.5 10H2.5"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M12.5 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H12.5"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
            Logout</x-responsive-nav-link
          >
        </form>
        
      </div>
    </div>
  </aside>