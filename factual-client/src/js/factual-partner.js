import 'webui-popover';
import Mark from 'mark.js';
import { getFacts } from './api';
import { getUserToken, getUrlCode } from './util';

const documentReady = (fn) => {
  if (document.readyState !== 'loading') {
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}

const displayFact = (fact, marker, source, templates) => {
  let matched = true;

  if (fact.quote) {
    const factClass = `factchecker-${getUrlCode(fact.url)}`;
    marker.mark(fact.quote, {
      className: `${factClass} factchecker-fact-mark factchecker-fact-mark-${fact.sclass}`,
      acrossElements: true,
      separateWordSearch: false,
      each: (factMark) => {
        const content = templates.factTemplate({
          status: fact.status,
          quote: fact.quote,
          url: `${fact.url}?${source}`,
          logo: require('../assets/factual_logo.png'),
          statusClass: fact.sclass,
          date: fact.date,
        });

        this.matched++;

        $(factMark).webuiPopover({
          width: 320,
          arrow: false,
          placement: 'bottom',
          content,
          onShow: (element) => {
            $('.factchecker-fact-details__close a', element).on('click', () => {
              $(factMark).webuiPopover('hide');
            });
          },
        });
      },
      done: () => {
        $(`.${factClass}`).last().addClass('factchecker-fact-mark-icon');
      },
      noMatch: () => {
        matched = false;
      },
    });
  } else {
    matched = false;
  }

  return matched;
};

const displayUnmatchedFact = (fact, templates) => {
  let content = templates.nfactTemplate({
    status: fact.status,
    stext: fact.stext,
    url: fact.url,
    logo: require('../assets/factual_logo.png'),
    statusClass: fact.sclass,
  });

  content = $(content);

  $('.factchecker-fact-details__close a', content).on('click', () => {
    $('.factchecker-fact-details-container').fadeOut();
  });

  $('body').append(content);
};

const factualPartnerInit = () => {
  const scriptTag = document.querySelector('script#factual-client-script');
  let url;
  let source;

  if (scriptTag) {
    url = scriptTag.getAttribute('data-factual-client-url');
    source = 'factual_proxy';
  } else {
    url = window.location.href;
    source = 'factual_partner';
  }

  const templates = {
    factTemplate: _.template(require('../views/fact.html')),
    nfactTemplate: _.template(require('../views/unmatched-fact.html')),
  };

  getFacts(url, getUserToken(), source, 'site')
    .then((facts) => {
      let unmatchedFact = undefined;

      const marker = new Mark(document.querySelector('body'));
      facts.forEach((fact) => {
        if (!displayFact(fact, marker, source, templates, unmatchedFact)) {
          unmatchedFact = fact;
        }
      });

      if (unmatchedFact) {
        displayUnmatchedFact(unmatchedFact, templates);
      }

      if (facts.length) {
        $('#factual-proxy-logo img').attr('src', '/assets/img/factual_icon_38x38.png');
        $('#factual-proxy-logo').attr('data-badge', facts.length);
      }
    });

};

documentReady(factualPartnerInit());