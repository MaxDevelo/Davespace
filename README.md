# What is a Davespace

Davespace is a repository to learn Symfony. The objective of Davespace is to learn Symfony, but above all to test things before implementing them on your projects.

# How to use Davespace

Tu use the davespace, you need to clone the project
```sh
git clone git@github.com:MaxDevelo/Davespace.git

cd Davespace
```

Then, the main branch should never be pushed. This is the branch that contains the base site.

You need to create branches with the name of the items you want to test.
Example :

```sh
git switch -c feature/login-customer

# Or

git switch -c feature/chat-system
```

Once you're done testing your feature, you can either leave it or remove it if you think no one will use it.

