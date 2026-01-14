set "archive_name=onefutureoriginalj4"
set "archive_format=zip"
set "target=%archive_name%.%archive_format%"

echo %target%

if exist %target% (
    del %target%
)

winrar a -afzip -r -md32k -x@.zipignore %target% *