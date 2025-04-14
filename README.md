## Dev (Feature, Patch, Breaking Change) Branch
All patches, minors/features, breaking changes or any types of initial release should be merged into this branch. Follow [conventional commit messages](https://www.conventionalcommits.org/en/v1.0.0/) for reviewers to easily identify the type of a commit.

### Installation

- Clone or branch out from here
 ```
 git clone --single-branch --branch feature_compilation https://github.com/Mikoaquino/hris-v2.git
 ```

#### Client / Frotend

- Navigate to [`client/`](https://github.com/Mikoaquino/HRIS-V2/tree/feature_compilation/client) directory:
```
cd client
```
- Install dependencies defined in `package.json`
```
npm install
```
- Run the local development server
```
npm run dev
```

#### Server / Backend

- Navigate to [`server/`](https://github.com/Mikoaquino/HRIS-V2/tree/feature_compilation/server) directory:

```
cd server
```

- (1) create the .env file (2) generate the application encrypted key (3) install dependencies defined in composer.json
```php
cp .env.example .env // DON'T FORGET TO MODIFY THE DB_* USING MYSQL
php artisan key:generate
composer install
```

- Run the migrations and seed the database
```php
php artisan migrate:fresh --seed
```

- Run the local development server
```php
php artisan serve
```

### Pull Request (PR) Guidelines

- Make sure your head branch is up-to-date with this upstream branch by running `git pull origin feature_compilation`.
-Be as descriptive and elaborate as possible when describing the changes you made. Optional, but you may provide code snippets, test(manually, e2e, unit, integration, etc), or demos.
- Code reviews are **required** before merging so always add reviewers to notify them of your prs.
- Keep your pr as focused as possible, separate bug fixes from introducing new features. If the scope of your changes is quite large, it would be difficult for anybody to read that abomination (speaking from experience, ain't nobody reviewing that bro).
- Your pr might be addressed to provide solution for an issue you or somebody created in [Issues](https://github.com/Mikoaquino/hris-v2/issues) page, ensure that you link/reference it to your pr.
- To finalize, remove any debugging statements `console.log, dd(), var_dump(), die()` in your code.

### Test

- If you found a bug, defect, errors, etc, open a ticket in [Issues](https://github.com/Mikoaquino/hris-v2/issues) page and assign the developer who should do the fixing.
- State your development environment like the version of your node, composer, php, laravel, operating system, and anything valuable that could be the cause of the issue.
- Provide a step-by-step procedure to reproduce the issue (don't be an asshole keeping everybody guessing). 
- If possible, propose a posible solution, idea, or workaround to get to the core or resolve the issue.

> [!IMPORTANT]
> For QAs, [Step 3](#Test) of the Test section is of utmost importance.

Happy coding, nerds!
