# avengers-jla-chat
Chat app built with Laravel, powered by Chatkit

## Prerequisites
1. PHP (7.1.3 or greater)
2. Composer.
3. Node.js (6.5.0 or greater).
4. A Pusher account. Create one [here](https://pusher.com/signup).

## Getting Started

- Clone the project
```
git clone https://github.com/shalvah/avengers-jla-chat.git
```

- Copy the `.env.example` file to a `.env` file. Sign in to http://dash.pusher.com with your Pusher account. Create a new Chatkit app and add your credentials to the .env file:
```
CHATKIT_INSTANCE_LOCATOR=your-instance-locator
CHATKIT_KEY=your-secret-key
```

- In your Chatkit instance Settings, enable the test token provider endpoint and add the generated URL to the `.env` file:

```
MIX_CHATKIT_AUTH_URL=your-token-provider-url
```

- Install dependencies and compile Javascript assets
```
composer install
npm install
npm run dev
```

- Serve the app
```
php artisan serve
```

Visit the app on http://localhost:8000/register and sign up as a new user. Do the same in another browser, so you have two concurrent sessions on the same PC. You should be able to send messages between the two users. 


## Built With

* [Chatkit](https://pusher.com/chatkit) - Easy chat integration for developers
* [Laravel](http://laravel.com) -  The PHP framework for web artisans
* [Vue.js](https://vuejs.org/) - The progressive JavaScript framework
