name              "app"
maintainer        "JP1971"
maintainer_email  "jameson@jp1971.com"
description       "Main entry point for installing and configuring a simple LAMP stack"
version           "1.0.0"

recipe "app", "Main entry point for installing and configuring a simple LAMP stack"

depends "apache"
depends "dotdeb"
depends "php"
depends "apt"
depends "openssl"
depends "mysql"

%w{ debian ubuntu }.each do |os|
  supports os
end
