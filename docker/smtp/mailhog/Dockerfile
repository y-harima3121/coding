FROM arm64v8/alpine:3.15

# Install ca-certificates, required for the "release message" feature:
RUN apk --no-cache add \
    ca-certificates

# Install MailHog:
RUN apk update && \
    apk --no-cache add --virtual build-dependencies \
    go \
    git \
    gcc \
    libc-dev \
  && mkdir -p /root/gocode
RUN export GOPATH=/root/gocode \
  && go get github.com/mailhog/MailHog
RUN mv /root/gocode/bin/MailHog /usr/local/bin \
  && rm -rf /root/gocode \
  && apk del --purge build-dependencies

# Add mailhog user/group with uid/gid 1000.
# This is a workaround for boot2docker issue #581, see
# https://github.com/boot2docker/boot2docker/issues/581
RUN adduser -D -u 1000 mailhog

USER mailhog

WORKDIR /home/mailhog

ENTRYPOINT ["MailHog"]

# Expose the SMTP and HTTP ports:
EXPOSE 1025 8025