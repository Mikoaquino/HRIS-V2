## 🔹 Dev (Feature, Patch, Breaking Change) Branch
All patches, minors/features, breaking changes or any types of initial release should be merged into this branch. Follow [conventional commit messages](https://www.conventionalcommits.org/en/v1.0.0/) for reviewers to easily identify the type of a commit.

### ✅ Pull Request (PR) Guidelines

1. Clone or branch out from here
 `git clone --single-branch --branch feature_compilation https://github.com/Mikoaquino/hris-v2.git`
2. Make sure your head branch is up-to-date with this upstream branch by running `git pull origin feature_compilation`.
3. Be as descriptive and elaborate as possible when describing the changes you made. Optional, but you may provide code snippets, test(manually, e2e, unit, integration, etc), or demos.
4. Code reviews are **required** before merging so always add reviewers to notify them of your prs.
5. Keep your pr as focused as possible, separate bug fixes from introducing new features. If the scope of your changes is quite large, it would be difficult for anybody to read that abomination (speaking from experience, ain't nobody reviewing that bro).
6. Your pr might be addressed to provide solution for an issue you or somebody created in [Issues](https://github.com/Mikoaquino/hris-v2/issues) page, ensure that you link/reference it to your pr.
7. To finalize, remove any debugging statements `console.log, dd(), var_dump(), die()` in your code.

### 🧪 Test

1. If you found a bug, defect, errors, etc, open a ticket in [Issues](https://github.com/Mikoaquino/hris-v2/issues) page and assign the developer who should do the fixing.
2. State your development environment like the version of your node, composer, php, laravel, operating system, and anything valuable that could be the cause of the issue.
3. Provide a step-by-step procedure to reproduce the issue (don't be an asshole keeping everybody guessing). 
4. If possible, propose a posible solution, idea, or workaround to get to the core or resolve the issue.

> [!IMPORTANT]
> For QAs, [Step 3](#Test) of the Test section is of utmost importance.

Happy coding, nerds!
